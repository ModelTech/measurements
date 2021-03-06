<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Units\UnitAngle;
use Measurements\Exceptions\UnitException;

/**
 * The `Angle` class represents specific quantities of angle.
 */
class Angle extends Measurement {

	/**
	 * Initializes a new angle with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function __construct($value, Unit $unit)
	{
		if (!$unit instanceof UnitAngle) {
			throw new UnitException("Attempt to create an angle measurement from an invalid unit [$unit]!");
		}

		parent::__construct($value, $unit);
	}

}
