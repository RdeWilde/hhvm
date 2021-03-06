<?php
// Copyright 2004-present Facebook. All Rights Reserved.
// This file is @generated by
// fbcode/hphp/facebook/tools/code_model/Generate.sh

namespace HH\CodeModel {


/** The kinds of operations that IUnaryOpExpressions can perform. */

class UnaryOperators /* extends Enum<UnaryOperator> */ {
  /** (array) x */
  const UnaryOperator PHP_ARRAY_CAST_OP = 1;
  /** x[] */
  const UnaryOperator PHP_ARRAY_APPEND_POINT_OP = 2;
  /** await x */
  const UnaryOperator PHP_AWAIT_OP = 3;
  /** (bool) x */
  const UnaryOperator PHP_BOOL_CAST_OP = 4;
  /** ~ x */
  const UnaryOperator PHP_BITWISE_NOT_OP = 5;
  /** clone x */
  const UnaryOperator PHP_CLONE_OP = 6;
  /** $$ x */
  const UnaryOperator PHP_DYNAMIC_VARIABLE_OP = 7;
  /** @ x */
  const UnaryOperator PHP_ERROR_CONTROL_OP = 8;
  /** (float) x */
  const UnaryOperator PHP_FLOAT_CAST_OP = 9;
  /** include x */
  const UnaryOperator PHP_INCLUDE_OP = 10;
  /** include_once x */
  const UnaryOperator PHP_INCLUDE_ONCE_OP = 11;
  /** (int) x */
  const UnaryOperator PHP_INT_CAST_OP = 12;
  /** - x */
  const UnaryOperator PHP_MINUS_OP = 13;
  /** ! x */
  const UnaryOperator PHP_NOT_OP = 14;
  /** (object) x */
  const UnaryOperator PHP_OBJECT_CAST_OP = 15;
  /** + x */
  const UnaryOperator PHP_PLUS_OP = 16;
  /** x -- */
  const UnaryOperator PHP_POST_DECREMENT_OP = 17;
  /** x ++ */
  const UnaryOperator PHP_POST_INCREMENT_OP = 18;
  /** -- x */
  const UnaryOperator PHP_PRE_DECREMENT_OP = 19;
  /** ++ x */
  const UnaryOperator PHP_PRE_INCREMENT_OP = 20;
  /** print x */
  const UnaryOperator PHP_PRINT_OP = 21;
  /** & x */
  const UnaryOperator PHP_REFERENCE_OP = 22;
  /** require x */
  const UnaryOperator PHP_REQUIRE_OP = 23;
  /** require_once x */
  const UnaryOperator PHP_REQUIRE_ONCE_OP = 24;
  /** (string) x */
  const UnaryOperator PHP_STRING_CAST_OP = 25;
  /** (unset) x */
  const UnaryOperator PHP_UNSET_CAST_OP = 26;

  public static function hasPriority(
    /*UnaryOperator*/ $op1, /*BinaryOperator*/ $op2) : bool {
    switch ($op1) {
      case UnaryOperators::PHP_ARRAY_APPEND_POINT_OP:
      case UnaryOperators::PHP_ARRAY_CAST_OP:
      case UnaryOperators::PHP_BITWISE_NOT_OP:
      case UnaryOperators::PHP_BOOL_CAST_OP:
      case UnaryOperators::PHP_ERROR_CONTROL_OP:
      case UnaryOperators::PHP_FLOAT_CAST_OP:
      case UnaryOperators::PHP_INT_CAST_OP:
      case UnaryOperators::PHP_OBJECT_CAST_OP:
      case UnaryOperators::PHP_POST_DECREMENT_OP:
      case UnaryOperators::PHP_POST_INCREMENT_OP:
      case UnaryOperators::PHP_PRE_DECREMENT_OP:
      case UnaryOperators::PHP_PRE_INCREMENT_OP:
      case UnaryOperators::PHP_STRING_CAST_OP:
        switch ($op2) {
          case BinaryOperators::PHP_ARRAY_ELEMENT:
            return false;
        }
        return true;

      case UnaryOperators::PHP_AWAIT_OP:
      case UnaryOperators::PHP_DYNAMIC_VARIABLE_OP:
      case UnaryOperators::PHP_INCLUDE_OP:
      case UnaryOperators::PHP_INCLUDE_ONCE_OP:
      case UnaryOperators::PHP_MINUS_OP:
      case UnaryOperators::PHP_PLUS_OP:
      case UnaryOperators::PHP_PRINT_OP:
      case UnaryOperators::PHP_REQUIRE_OP:
      case UnaryOperators::PHP_REQUIRE_ONCE_OP:
      case UnaryOperators::PHP_UNSET_CAST_OP:
        return false;

      case UnaryOperators::PHP_NOT_OP:
        switch ($op2) {
          case BinaryOperators::PHP_ARRAY_ELEMENT:
          case BinaryOperators::PHP_INSTANCEOF:
            return false;
        }
        return true;

      case UnaryOperators::PHP_CLONE_OP:
        return true;

      case UnaryOperators::PHP_REFERENCE_OP:
        switch ($op2) {
          case BinaryOperators::PHP_AND_ASSIGN:
          case BinaryOperators::PHP_ARRAY_PAIR:
          case BinaryOperators::PHP_ASSIGNMENT:
          case BinaryOperators::PHP_BOOLEAN_AND:
          case BinaryOperators::PHP_BOOLEAN_OR:
          case BinaryOperators::PHP_CONCAT_ASSIGN:
          case BinaryOperators::PHP_DIVIDE_ASSIGN:
          case BinaryOperators::PHP_LOGICAL_AND:
          case BinaryOperators::PHP_LOGICAL_OR:
          case BinaryOperators::PHP_LOGICAL_XOR:
          case BinaryOperators::PHP_MINUS_ASSIGN:
          case BinaryOperators::PHP_MODULUS_ASSIGN:
          case BinaryOperators::PHP_MULTIPLY_ASSIGN:
          case BinaryOperators::PHP_OR:
          case BinaryOperators::PHP_OR_ASSIGN:
          case BinaryOperators::PHP_PLUS_ASSIGN:
          case BinaryOperators::PHP_SHIFT_LEFT_ASSIGN:
          case BinaryOperators::PHP_SHIFT_RIGHT_ASSIGN:
          case BinaryOperators::PHP_XOR_ASSIGN:
          case BinaryOperators::PHP_XOR:
            return true;
        }
        return false;
    }
  }

}
}
