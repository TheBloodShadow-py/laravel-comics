@php
    class NavElement
    {
        private $name;
        private $link;

        public function __construct($name, $link)
        {
            $this->name = $name;
            $this->link = $link;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getLink()
        {
            return $this->link;
        }
    }

@endphp
