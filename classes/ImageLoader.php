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
        return $directoryFiles;
    }

    function renderImageList() {
        foreach ($this->categoryOrder as $category) {
            echo '<ul class="h-list h-list-category js-scroll-category ' . $category . '">';
            foreach ($this->getDirectoryFiles($this->directory . $category) as $file) {
                if (!is_dir($this->directory . $category . '/' . $file)) {
                    $filePath = $this->directory . $category . '/' . $file;
                    $thumbPath = $this->directory . $category . '/' . $this->thumbDirectory . $file;
                    echo '<li>';
                    echo '<a href="' . $filePath . '" rel="lightbox[gallery]">';
                    echo '<img src="' . $thumbPath . '" alt="" />';
                    echo '</a>';
                    echo '</li>';
                }
            }
            echo '</ul>';
        }
    }

}
?>