<?php

    /**
     * Copyright 2014 CAMDesigns
     *
     * Licensed under the Apache License, Version 2.0 (the "License");
     * you may not use this file except in compliance with the License.
     * You may obtain a copy of the License at
     *
     *     http://www.apache.org/licenses/LICENSE-2.0
     *
     * Unless required by applicable law or agreed to in writing, software
     * distributed under the License is distributed on an "AS IS" BASIS,
     * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
     * See the License for the specific language governing permissions and
     * limitations under the License.
     *
     * @package     JaggedUI
     * @copyright   CAMDesigns 2014
     * @license     Apache License, Version 2.0
     */
    namespace Jagged\Lambo\Helper;

    use Illuminate\View\Environment;
    use RecursiveDirectoryIterator;
    use RecursiveIteratorIterator;

    /**
     * Class UIHelper
     *
     * @author Christopher A. Moore <chris.a.moore@gmail.com>, <chris@camdesigns.net>
     */
    class UIHelper
    {

        /**
         * Create a new profiler instance.
         *
         * @param \Illuminate\View\Environment $view
         *
         * @return \Jaggedui\Lambo\Helper\UIHelper
         */
        public function __construct(Environment $view)
        {
            $this->view = $view;
        }

        /**
         * Return the Views JS
         *
         * @return Illuminate\View\View
         */
        public function Js()
        {
            return \View::make('jaggedui::jagged');
        }

        public function pathToJagged()
        {
            return __DIR__ . '/../../../../vendor/justinwoodcock/jagged-ui/app/';
        }

        public function pathToPublic()
        {
            $dir = __DIR__ . '/../../../../public/';
            return $dir;
        }
    }

