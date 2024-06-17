<?php


    class Book
    {
        private $caption;
        private $author;
        private $page_count;
        private $current_page;

        public function openBookOnPage($page)
        {
            if (gettype($page) != 'integer') {
                return;
            }
        }

        public function currentPage()
        {
            return $this->current_page;
        }

        public function prevPage()
        {
            $this->current_page--;
        }

        public function nextPage()
        {
            $this->current_page++;
        }

    }



    class User
    {
        private $name;     # string
        private $login;    # string
        private $password; # string

        public function __construct($name, $login, $password)
        {
            $this->name = $name;
            $this->login = $login;
            $this->password = $password;
        }

        public function __destruct()
        {
            echo '<br>User object destructed';
        }

        public function setName($newName)
        {
            if (gettype($newName) != 'string') {
                return;
            }

            $this->name = $newName;
        }

        public function getName()
        {
            return $this->name;
        }

    }

    $user = new User('Sergey', 'serg', 'my_password');

    $user->setName(-124);

    echo $user->getName();




?>



