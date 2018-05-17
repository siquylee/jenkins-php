The project is based on the work of http://jenkins-php.org with some customization to provide the build with/without Docker.

### 1. Install the required Jenkins plugins

See [Required Jenkins Plugins](http://jenkins-php.org/installation.html) section at http://jenkins-php.org/installation.html

### 2. Required PHP Tools

The following PHP tools are required:

- [PHPUnit](https://phpunit.de/)
- [phpDox](http://phpdox.de/)
- [Phing](https://www.phing.info/)

I made Dockerfile files with:
- PHPUnit 6.5.8
- phpDox 0.11.0 
- Phing 3.0.0-alpha1

I assume that these tools are on the $PATH and can be invoked with phpunit, phpdox and phing

### 3. Orchestrate the PHP tools using Phing

I use Phing to automate the build process. Phing is a PHP project build system or build tool based on ​Apache Ant. It orchestrates the execution of the various tools in the build.xml build script. The build script assumes that the rule sets for PHP_CodeSniffer, phpDox and PHPMD are located at build/phpcs.xml, build/phpdox.xml and build/phpmd.xml. Each PHP project needs a different build.xml file. I made 2 samples build.xml files, one for money project (generic type) and one for BookStack (Laravel project).

Executing the build.xml script will produce the following build directory:

```
build
|-- api ...
|-- coverage ...
|-- coverage-xml ...
`-- logs
    |-- checkstyle.xml
    |-- clover.xml
    |-- crap4j.xml
    |-- jdepend.xml
    |-- junit.xml
    |-- phploc.csv
    |-- pmd-cpd.xml
    `-- pmd.xml
|-- pdepend ...
|-- phpdox ...
```

These build artifacts will be processed by Jenkins.

### 4. Create a Jenkins job for your PHP project

Because the performance of code coverage report generation using PHPUnit is low so I made 2 jobs types: one with coverage enabled and one without coverage. There is not much to discuss with Jenkins standard build, just copy from **php-template** and replace **Invoke Ant** step with **Execute shel"** step. In command textbox, type 

```
phing
```
or
```
phing full-build-coverage
```
*full-build-coverage* is a target in build.xml

Here I only refer to the build inside a Docker container, first you fetch the jenkins-cli.jar from your jenkins server then  consult the sample in **files/jenkins/create-job.sh**

Based on your PHP project type that can be a generic PHP or Laravel project, you copy the whole content in **files/php/generic** or **files/php/laravel** folder to your project's source code and update the configuration to fit your need.

```
build
    |-- phpcs.xml
    |-- phpdox.xml
    |-- phpmd.xml
    |-- phpunit.xml
docker
    |-- docker-compose.yml
    |-- build.sh
    |-- docker-compose.yml
    |-- docker.sh
build.xml
```

### 5. Examples

- The [Money](http://jenkins-php.org/example.html) project is a generic PHP example that uses the build automation with Phing and Docker.
- The [BookStack](https://github.com/BookStackApp/BookStack) project is an Laravel project, a bigger example 


