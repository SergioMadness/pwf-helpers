Helpers
====

[http://web-development.pw/](http://web-development.pw/)

Requirements
------------
 - PHP 5.4+


Installation
------------
PWF is available through [composer](https://getcomposer.org/)

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