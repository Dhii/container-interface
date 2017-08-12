# Dhii - Data - Container - Interface

[![Build Status](https://travis-ci.org/dhii/data-container-interface.svg?branch=master)](https://travis-ci.org/dhii/data-container-interface)
[![Code Climate](https://codeclimate.com/github/dhii/data-container-interface/badges/gpa.svg)](https://codeclimate.com/github/dhii/data-container-interface)
[![Test Coverage](https://codeclimate.com/github/dhii/data-container-interface/badges/coverage.svg)](https://codeclimate.com/github/dhii/data-container-interface/coverage)
[![Latest Stable Version](https://poser.pugx.org/dhii/data-container-interface/version)](https://packagist.org/packages/dhii/data-container-interface)
[![This package complies with Dhii standards](https://img.shields.io/badge/Dhii-Compliant-green.svg?style=flat-square)][Dhii]

Interfaces for working with data containers.  
This package complies with [Dhii] standards.

## Details
This package introduces a couple of completely new
interfaces for granularity, and extends the exceptions interfaces to make them
more useful, while still sticking to the spirit of PSR-11.

Interfaces in this package extend those from [`psr/container`], the [PSR-11]
repository, where applicable. As such, the container itself, as well as the
exceptions, are compatible with PSR-11, in the sense that it's possible to pass
instances of the respectable interfaces from this package where PSR-11 interfaces
are expected.

:book: Please see [Wiki] for detailed explanation.

### Interfaces

- [`HasCapableInterface`] - Allows checking for existence of data value by key.
- [`ContainerInterface`] - Allows checking for and retrieval of data value by key.
- [`ContainerAwareInterface`] - Allows retrieval of a container instance.
- [`ContainerExceptionInterface`] - An exception that occurs in relation to a container,
and is aware of that container.
- [`NotFoundExceptionInterface`] - An exception that occurs when attempting to
retrieve data for key that is not set, and is also container aware by extension.




[Dhii]:                               https://github.com/Dhii/dhii
[Wiki]:                               ./wiki
[PSR-11]:                             https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-11-container.md

[`psr/container`]:                    https://github.com/php-fig/container

[`HasCapableInterface`]:              ./src/HasCapableInterface.php
[`ContainerInterface`]:               ./src/ContainerInterface.php
[`ContainerAwareInterface`]:          ./src/ContainerAwareInterface.php
[`ContainerExceptionInterface`]:      ./src/ContainerExceptionInterface.php
[`NotFoundExceptionInterface`]:       ./src/NotFoundExceptionInterface.php
