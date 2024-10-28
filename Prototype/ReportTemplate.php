<?php
    require_once 'Template.php';

    class ReportTemplate implements Template
    {
        private string $title;
        private string $chartColor;
        private int $chartSize;

        public function __construct(
            string $title,
            string $chartColor,
            int $chartSize
        ) {
            $this->title = $title;
            $this->chartColor = $chartColor;
            $this->chartSize = $chartSize;
        }

        public function getColor(): string {
            return $this->chartColor;
        }

        public function getTitle(): string {
            return $this->title;
        }

        public function clone(): Template {
            return new ReportTemplate(sprintf("Copy of %s", $this->title), $this->chartColor, $this->chartSize);
        }
    }
?>
