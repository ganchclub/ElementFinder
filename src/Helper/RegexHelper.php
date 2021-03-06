<?php

  namespace Xparse\ElementFinder\Helper;

  use Xparse\ElementFinder\Collection\StringCollection;

  /**
   * @author Ivan Shcherbak <alotofall@gmail.com>
   */
  class RegexHelper {

    /**
     * @param string $regex
     * @param integer $i
     * @param string[] $strings
     * @return \Xparse\ElementFinder\Collection\StringCollection
     * @throws \Exception
     */
    public static function match($regex, int $i, array $strings) : StringCollection {


      $result = [];
      foreach ($strings as $string) {

        preg_match_all($regex, $string, $matchedData);

        if (!isset($matchedData[$i])) {
          continue;
        }

        foreach ((array) $matchedData[$i] as $resultString) {
          $result[] = $resultString;
        }
      }

      return new StringCollection($result);
    }


    /**
     * @param string $regex
     * @param callable $i
     * @param array $strings
     * @return \Xparse\ElementFinder\Collection\StringCollection
     * @throws \Exception
     */
    public static function matchCallback($regex, callable $i, array $strings) {

      $result = [];
      foreach ($strings as $string) {

        if (preg_match_all($regex, $string, $matchedData)) {

          $rawStringResult = $i($matchedData);

          if (!is_array($rawStringResult)) {
            throw new \Exception('Invalid value. Expect array from callback');
          }

          foreach ($rawStringResult as $resultString) {
            $result[] = $resultString;
          }
        }
      }

      return new StringCollection($result);

    }
  }