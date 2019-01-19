<?php

    namespace Tivet\Plugin\Traits;

    trait Configure
    {
        private static $name;

        private static $description;

        private static $delay;
        

        /**
         * @param string $name
         * @return $this
         */
        public final function setName(string $name) : self
        {
            self::$name = $name;

            return $this;
        }


        /**
         * @param string $description
         * @return Configure
         */
        public final function setDescription(string $description) : self
        {
            self::$description = $description;

            return $this;
        }


        /**
         * @param float $delay
         * @return Configure
         */
        public final function setDelay(float $delay) : self
        {
            self::$delay = $delay;

            return $this;
        }


        /**
         * @return string | null
         */
        public final function getName()
        {
            return self::$name;
        }


        /**
         * @return string | null
         */
        public final function getDescription()
        {
            return self::$description;
        }


        /**
         * @return float | null
         */
        public final function getDelay()
        {
            return self::$delay;
        }
    }