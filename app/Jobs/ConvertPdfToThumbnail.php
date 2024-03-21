<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\PdfToImage\Pdf;

class ConvertPdfToThumbnail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $pdfPath;
    protected $thumbnailPath;

    public function __construct($pdfPath, $thumbnailPath)
    {
        $this->pdfPath = $pdfPath;
        $this->thumbnailPath = $thumbnailPath;
    }

    public function handle()
    {
    //     $pdf = new Pdf($this->pdfPath);
    //     $pdf->setOutputFormat('png'); // Convert to PNG format
    //     $pdf->setResolution(150); // Set resolution

    //     // Convert first page only (thumbnail)
    //     $pdf->page(1)
    //         ->saveImage($this->thumbnailPath);
    // }
        try {
        $pdf = new Pdf($this->pdfPath);
        // Your conversion logic here
        $pdf->setOutputFormat('png'); // Convert to PNG format
        $pdf->setResolution(150); // Set resolution
        // Convert first page only (thumbnail)
        $pdf->page(1)
        ->saveImage($this->thumbnailPath);
        } catch (PdfDoesNotExist $e) {
        return response()->json(['error' => 'PDF file does not exist'], 404);
        } catch (\Exception $e) {
        return response()->json(['error' => 'Failed to convert PDF to image'], 500);
        }
    }


}