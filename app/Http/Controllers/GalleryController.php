<?php

namespace App\Http\Controllers;

class GalleryController extends Controller
{
    public function index()
    {
        $galleryPath = public_path('assets/gallery');
        $galleryItems = [];
        $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        $videoExtensions = ['mp4', 'mov', 'avi', 'webm'];

        if (is_dir($galleryPath)) {
            $files = scandir($galleryPath);
            foreach ($files as $file) {
                if ($file === '.' || $file === '..') {
                    continue;
                }

                $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                $name = pathinfo($file, PATHINFO_FILENAME);

                $encodedFile = rawurlencode($file);

                if (in_array($extension, $imageExtensions)) {
                    $galleryItems[] = [
                        'type' => 'image',
                        'src' => asset('assets/gallery/' . $encodedFile),
                        'thumb' => asset('assets/gallery/' . $encodedFile),
                        'caption' => ucwords(str_replace(['-', '_'], ' ', $name)),
                    ];
                } elseif (in_array($extension, $videoExtensions)) {
                    $poster = $this->findPoster($galleryPath, $name, $imageExtensions);

                    $galleryItems[] = [
                        'type' => 'video',
                        'src' => asset('assets/gallery/' . $encodedFile),
                        'thumb' => $poster ? asset('assets/gallery/' . rawurlencode($poster)) : '',
                        'caption' => ucwords(str_replace(['-', '_'], ' ', $name)),
                    ];
                }
            }
        }

        return view('gallery', compact('galleryItems'));
    }

    private function findPoster(string $dir, string $videoName, array $imageExts): ?string
    {
        foreach ($imageExts as $ext) {
            $candidate = $videoName . '.' . $ext;
            if (file_exists($dir . '/' . $candidate)) {
                return $candidate;
            }
            // Also check for poster suffix e.g. video-name-poster.jpg
            $posterCandidate = $videoName . '-poster.' . $ext;
            if (file_exists($dir . '/' . $posterCandidate)) {
                return $posterCandidate;
            }
        }
        return null;
    }
}
