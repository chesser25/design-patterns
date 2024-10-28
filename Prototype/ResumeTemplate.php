<?php
    require_once 'Template.php';

    class ResumeTemplate implements Template
    {
        private string $title;
        private string $font;
        private string $color;
        private int $margin;

        public function __construct(
            string $title,
            string $font,
            string $color,
            int $margin
        ) {
            $this->title = $title;
            $this->font = $font;
            $this->color = $color;
            $this->margin = $margin;
        }

        public function getColor(): string {
            return $this->color;
        }

        public function getTitle(): string {
            return $this->title;
        }

        public function clone(): Template {
            return new ResumeTemplate(sprintf("Copy of %s", $this->title), $this->font, $this->color, $this->margin);
        }
    }
?>
