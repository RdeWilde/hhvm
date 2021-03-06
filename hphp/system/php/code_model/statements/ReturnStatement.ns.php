<?php
// Copyright 2004-present Facebook. All Rights Reserved.
// This file is @generated by
// fbcode/hphp/facebook/tools/code_model/Generate.sh

namespace HH\CodeModel {

/**
 *  return [expression];
 */
class ReturnStatement /*implements IReturnStatement*/ {
  use Statement;
  use Node;

  private /*?IExpression*/ $expression;

  /**
   *  return [expression];
   */
  public function getExpression() /*: ?IExpression*/ {
    return $this->expression;
  }
  /**
   *  return [expression];
   */
  public function setExpression(/*?IExpression*/ $value) /*: this*/ {
    $this->expression = $value;
    return $this;
  }

  /**
   * Returns $visitor->visitReturnStatement($this) if
   * such a method exists on $visitor.
   * Otherwise returns $visitor->visitStatement($this) if
   * such a method exists on $visitor.
   * Otherwise returns $visitor->visitNode($this) if
   */
  public function accept(/*mixed*/ $visitor) /*: mixed*/ {
    if (method_exists($visitor, "visitReturnStatement")) {
      // UNSAFE
      return $visitor->visitReturnStatement($this);
    } else if (method_exists($visitor, "visitStatement")) {
      // UNSAFE
      return $visitor->visitStatement($this);
    } else {
      return $visitor->visitNode($this);
    }
  }

  /**
   * Yields a list of nodes that are children of this node.
   * A node has exactly one parent, so doing a depth
   * first traversal of a node graph using getChildren will
   * traverse a spanning tree.
   */
  public function getChildren() /*: Continuation<INode>*/ {
    if ($this->expression !== null) {
      yield $this->expression;
    }
  }
}
}
