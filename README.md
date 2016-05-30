Helpers
====

[http://web-development.pw/](http://web-development.pw/)

[![Latest Stable Version](https://poser.pugx.org/professionalweb/helpers/v/stable)](https://packagist.org/packages/professionalweb/helpers)
[![Build Status](https://travis-ci.org/SergioMadness/pwf-helpers.svg?branch=dev)](https://travis-ci.org/SergioMadness/pwf-helpers)
[![Code Climate](https://codeclimate.com/github/SergioMadness/pwf-helpers/badges/gpa.svg)](https://codeclimate.com/github/SergioMadness/pwf-helpers)
[![Coverage Status](https://coveralls.io/repos/github/SergioMadness/pwf-helpers/badge.svg?branch=dev)](https://coveralls.io/github/SergioMadness/pwf-helpers?branch=dev)
[![Dependency Status](https://www.versioneye.com/user/projects/573c4f34ce8d0e004505e8d4/badge.svg?style=flat)](https://www.versioneye.com/user/projects/573c4f34ce8d0e004505e8d4)
[![License](https://poser.pugx.org/professionalweb/helpers/license)](https://packagist.org/packages/professionalweb/helpers)
[![Latest Unstable Version](https://poser.pugx.org/professionalweb/helpers/v/unstable)](https://packagist.org/packages/professionalweb/helpers)


Requirements
------------
 - PHP 5.4+


Installation
------------
Module is available through [composer](https://getcomposer.org/)

composer require professionalweb/helpers "dev-master"

Alternatively you can add the following to the `require` section in your `composer.json` manually:

```json
"professionalweb/helpers": "dev-master"
```
Run `composer update` afterwards.


Classes
-------
 - ArrayHelper
    - toArray
    - groupArray
    - map
    - recursiveArraySearch
    - recursivelySetValue
    - recursivelyGetValue
 - ConvertHelper
    - XML2Array
    - array2XML
 - HttpHelper
    - sendPost
    - sendCurl
    - isAbsoluteUrl
    - invokeSoap
 - StringHelpers
    - hashString
 - SystemHelpers
    - call
    - functionDI
    - methodDI
    - constructObject
    - createObject
 - Validator
    - validate
    - validateEquality
    - validateLength
    - validateEmail
    - validateByCallback



The MIT License (MIT)
---------------------

Copyright (c) 2016 Sergey Zinchenko, [Professional web](http://web-development.pw)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
    FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.