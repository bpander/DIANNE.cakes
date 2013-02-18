<?php

class ImageLoader
{
    private $directory = 'images/';

    private $thumbDirectory = 'thumbs/';

    private $categoryOrder = array('wedding', 'birthday', 'shower', 'other');

    private function getDirectoryFiles($directory) {
        $directoryFiles = array();
        if ($handle = opendir($directory)) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != '.' && $entry != '..') {
                    $directoryFiles[] = $entry;
                }
            }
        }
        asort($directoryFiles);
        return $directoryFiles;
    }

    function renderImageList() {
        $html = '';
        foreach ($this->categoryOrder as $category) {
            $html .= '<ul class="h-list h-list-category js-scroll-category ' . $category . '">';
            foreach ($this->getDirectoryFiles($this->directory . $category) as $file) {
                if (!is_dir($this->directory . $category . '/' . $file)) {
                    $filePath = $this->directory . $category . '/' . $file;
                    $thumbPath = $this->directory . $category . '/' . $this->thumbDirectory . $file;
                    $html .= '<li>';
                    $html .= '<a href="' . $filePath . '" rel="lightbox[gallery]">';
                    $html .= '<img src="' . $thumbPath . '" alt="" />';
                    $html .= '</a>';
                    $html .= '</li>';
                }
            }
            $html .= '</ul>';
        }
        echo $html;
    }

}
?>