<?php

namespace SRF\Graph;

class GraphNode {
	private $id;
	private $parent = [];
	private $label;

	/**
	 * @var string $id : Node ID including namespace (= FULLPAGENAME)
	 */
	public function __construct( $id ) {
		$this->id = $id;
	}

	public function getID() {
		return $this->id;
	}

	/**
	 * @var string $predicate : the "predicate" linking an object to a subject
	 * @var string $object : the object, linked to this node
	 * @var SRF\Graph\GraphNode $node : the node object of the object
	 */
	public function addParentNode( $predicate, $object, $node) {
		$this->parent[] = [
			"predicate" => $predicate,
			"object"    => $object,
			"node" => $node
		];
	}

	/**
	 * @return array Of parent nodes
	 */
	public function getParentNode() {
		return $this->parent;
	}

	/**
	 * @param string $label : a label, e.g. Display Title, used instead of $id.
	 */
	public function setLabel($label){
		$this->label = $label;
	}

	public function getLabel() {
		return $this->label;
	}
}
