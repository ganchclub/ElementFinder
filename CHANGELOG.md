# Changelog
All Notable changes to `ElementFinder` will be documented in this file

## 0.1.0-alpha.6 [Unreleased]

### Fixed
 - #62 `FormHelper` return value attribute in select elements.

### Deprecated
 - #58 Fire error if we try to store non string values inside `StringCollection`  
 - #57 Deprecate method `ElementFinder::node` use `ElementFinder::element` instead 

### Removed
 - #53 Remove `ArrayAccess` interface from the `StringCollection`, `ObjectCollection` and `ElementCollection`
 - #52 Replace `Iterator`  with `IteratorAggregate` interface inside `StringCollection`, `ObjectCollection` and `ElementCollection`
 - #55 Remove (`StringCollection::prepend`,`StringCollection::addAfter`,`StringCollection::slice`,`StringCollection::extractItems`,`StringCollection::getNext`,`StringCollection::getPrevious`, `StringCollection::append`, `StringCollection::setItems`)  
 - #55 Remove (`ObjectCollection::prepend`,`ObjectCollection::addAfter`,`ObjectCollection::slice`,`ObjectCollection::extractItems`,`ObjectCollection::getNext`,`ObjectCollection::getPrevious`,`ObjectCollection::append`,`ObjectCollection::setItems`)  
 - #55 Remove (`ElementCollection::prepend`,`ElementCollection::addAfter`,`ElementCollection::slice`,`ElementCollection::extractItems`,`ElementCollection::getNext`,`ElementCollection::getPrevious`, `ElementCollection::append`, `ElementCollection::setItems`)  
 - #51 Remove (`ElementCollection::map`,`ObjectCollection::map`,`StringCollection::map`)  
 - Remove `StringCollection::item` use `StringCollection::get` instead  
 - Remove `ObjectCollection::item` use `ObjectCollection::get` instead  
 - Remove method `FormHelper::getDefaultFormData` use `FormHelper::getFormData` instead  
 - #59 Remove method `ObjectCollection::replace`   

### Changed
 - #54 Return new collection instead of modification (`StringCollection::replace`,`ObjectCollection::replace`)
   
### Added
 - #50 Add `StringCollection::unique` function
 - #56 Add `StringCollection::merge`, `ObjectCollection::merge` and `ElementCollection::merge` functions
 - #60 Add `StringCollection::add`,`StringCollection::get` methods
 - #60 Add `ObjectCollection::add`,`ObjectCollection::get` methods
 - #60 Add `ElementCollection::add`,`ElementCollection::get` methods
  
## 0.1.0-alpha.5 [2017-03-10]

### Added
- strict types declaration

### Changed
- all external collections where moved to appropriate ElementFinder collections

### Deprecated
- ArrayAccessible methods in Collections (offsetSet, offsetExists, offsetUnset, offsetGet)
- #49 deprecate `StringCollection::map`, `ObjectCollection::map`, `ElementCollection::map` use `walk` instead

### Removed
- fiv/collection package

## 0.1.0-alpha.3 [2016-06-02]

### Fixed
- #33 copy expression translator to child objects

### Removed
- method `ElementFinder::attribute()` has been removed
- method `ElementFinder::elements()` has been removed
- method `ElementFinder::getNodeItems()` has been removed
- method `ElementFinder::html()` has been removed
- method `NodeHelper::getInnerHtml()` has been removed
- method `NodeHelper::getOuterHtml()` has been removed
 

## 0.1.0-alpha.2 [2016-05-25]

### Added
- Added `ElementFinder::query()` as an alias of `ElementFinder::node()`
  
### Changed
- #18 Skip `XpathExpression` creation. Use `CssExpression` only when needed.
 
### Deprecated
- #29 `ElementFinder::getNodeItems()`
- #28 Method `ElementFinder::elements()` has been renamed to `ElementFinder::element()`
- #28 Method `ElementFinder::html()` has been renamed to `ElementFinder::content()`
- #28 Method `ElementFinder::query()` has been renamed to `ElementFinder::executeQuery()`
- #28 Method `NodeHelper::getOuterHtml()` has been renamed to `NodeHelper::getOuterContent()`
- #28 Method `NodeHelper::getInnerHtml()` has been renamed to `NodeHelper::getInnerContent()`
- #10 `ElementFinder::attribute()`. See `ElementFinder::value()`
- #14 Remove 3 parameter inside `ElementFinder::KeyValue()`

## Version 0.0.3

### Changed
- Feature #4 Use `DOMAttr::nodeValue` instead of `DOMAttr::value`
- BC #7 Refactor `Helper` class. Create `FormHelper`, `NodeHelper` and `StringHelper`