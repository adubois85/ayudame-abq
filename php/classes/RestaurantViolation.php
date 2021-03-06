<?php

namespace Edu\Cnm\Foodquisition;

require_once("autoload.php");

/**
 * Restaurant Violation cross section
 *
 * @author Dannielle Bojorquez
 * @version 1.0
 */
class RestaurantViolation implements \JsonSerializable {
	use ValidateDate;
	/**
	 *id for restaurant violation
	 * @var int $restaurantViolationId
	 *
	 **/
	private $restaurantViolationId;
	/**
	 * id of the restaurant violation restaurant
	 * @var int $restaurantViolationRestaurantId
	 **/
	private $restaurantViolationRestaurantId;
	/**
	 * id of the restaurant violation violation
	 * @var int $restaurantViolationViolationId
	 **/
	private $restaurantViolationViolationId;
	/**
	 * id of the restaurant violation compliance
	 * @var string $restaurantViolationCompliance
	 **/
	private $restaurantViolationCompliance;
	/**
	 * date of restaurant violation
	 * @var \DateTime $restaurantViolationDate
	 **/
	private $restaurantViolationDate;
	/**
	 * memo for restaurant violation
	 * @varchar string $restaurantViolationMemo
	 *
	 **/
	private $restaurantViolationMemo;
	/**
	 *
	 * Results for restaurant violation
	 * @varchar string $restaurantViolationResults
	 */
	private $restaurantViolationResults;

	/**
	 * constructor for this restaurantViolation
	 *
	 * @param int|null $newRestaurantViolationId of this restaurantViolation or null if a new restaurantViolation
	 * @param int $newRestaurantViolationRestaurantId of the restaurantId that caused the restaurant violation
	 * @param int $newRestaurantViolationViolationId of the restaurant violation violation
	 * @param string $restaurantViolationCompliance weather in compliance or not
	 * @param \DateTime|string|null $newRestaurantViolationDate date and time restaurant violation was sent or null if set to current date and time
	 * @param string $newRestaurantViolationMemo string containing inspector notes
	 * @param string $newRestaurantViolationResults sting containing results of inspection
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \RangeException if data values are out of bounds (e.g., strings too long, negative integers)
	 * @throws \TypeError if data types violate type hints
	 * @throws \Exception if some other exception occurs
	 * @Documentation https://php.net/manual/en/language.oop5.decon.php
	 **/
	public function __construct(?int $newRestaurantViolationId, int $newRestaurantViolationRestaurantId, ?int $newRestaurantViolationViolationId,  $restaurantViolationCompliance, $newRestaurantViolationDate = null, string $newRestaurantViolationMemo, string $newRestaurantViolationResults) {
				try {
					$this->setRestaurantViolationId($newRestaurantViolationId);
			$this->setRestaurantViolationRestaurantId($newRestaurantViolationRestaurantId);
			$this->setRestaurantViolationViolationId($newRestaurantViolationViolationId);
			$this->setRestaurantViolationCompliance($restaurantViolationCompliance);
			$this->setRestaurantViolationDate($newRestaurantViolationDate);
			$this->setRestaurantViolationMemo($newRestaurantViolationMemo);
			$this->setRestaurantViolationResults($newRestaurantViolationResults);
		} //determine what exception type was thrown
		catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
	}

	/**
	 *
	 * accessor method for restaurant violation Id
	 * @return int|null value of restaurant violation Id
	 */
	public function getRestaurantViolationId(): int {
		return ($this->restaurantViolationId);
	}

	/**
	 *
	 * mutator method for restaurant violation id
	 * @param int /null $newRestaurantViolationId new value of restaurant violation id
	 * @throws \RangeException if $newRestaurantViolationId is not positive
	 * @throws \TypeError if $newRestaurantViolationId is not an integer
	 **/
	public function setRestaurantViolationId(?int $newRestaurantViolationId): void {
		//if restaurant Violation id is null immediately return it
		if($newRestaurantViolationId === null) {
			$this->restaurantViolationId = null;
			return;
		}
		//verify the restaurant violation id is positive
		if($newRestaurantViolationId <= 0) {
			throw(new \RangeException("restaurant violation id is not positive"));
		}
		// convert and store the restaurant violation id
		$this->restaurantViolationId = $newRestaurantViolationId;
	}
	/**
	 * accessor method for restaurant violation restaurant id
	 *
	 * @return int value of restaurant violation restaurant id
	 **/
	public function getRestaurantViolationRestaurantId() : int{
		return($this->restaurantViolationRestaurantId);
	}
	/**
	 * mutator method for restaurant violation restaurant id
	 * @param int $newRestaurantViolationRestaurantId new value of restaurant violation restaurant id
	 * @throws \RangeException if $newRestaurantViolationRestaurantId is not positive
	 * @throws \TypeError if $newRestaurantViolationRestaurantId is not an integer
	 **/
	public function setRestaurantViolationRestaurantId(?int $newRestaurantViolationRestaurantId) : void {
		//verify the restaurant violation restaurant id is positive
		if($newRestaurantViolationRestaurantId <= 0) {
			throw(new \RangeException("restaurant violation restaurant id is not positive"));
		}
		//convert and store the restaurant violation restaurant id
		$this->restaurantViolationRestaurantId = $newRestaurantViolationRestaurantId;
	}
	/**
	 * accessor method for restaurant violation violation id
	 *
	 * @return int value of restaurant violation violation id
	 **/
	public function getRestaurantViolationViolationId() : int{
		return($this->restaurantViolationViolationId);
	}
	/**
	 * mutator method for restaurant violation violation id
	 * @param int $newRestaurantViolationViolationId new value of restaurant violation violation id
	 * @throws \RangeException if $newRestaurantViolationViolationId is not positive
	 * @throws \TypeError if $newRestaurantViolationViolationId is not an integer
	 **/
	public function setRestaurantViolationViolationId(int $newRestaurantViolationViolationId) : void {
		//verify the restaurant violation violation id is positive
		if($newRestaurantViolationViolationId < 0) {
			throw(new \RangeException("restaurant violation violation id is not positive " . $newRestaurantViolationViolationId));
		}
		//convert and store the restaurant violation violation id
		$this->restaurantViolationViolationId = $newRestaurantViolationViolationId;
	}
	/**
	 *accessor method for restaurant violation compliance
	 *
	 * @return string value of restaurant violation compliance
	 *
	 **/
	public function getRestaurantViolationCompliance() :string {
		return($this->restaurantViolationCompliance);
	}
	/**
	 * mutator method for restaurant violation compliance
	 *
	 * @param string $newRestaurantViolationCompliance new value of restaurant violation compliance
	 *@throws \InvalidArgumentException if $newRestaurantViolationCompliance is not a string or insecure
	 *@throws \RangeException if $newRestaurantViolationCompliance is > 17 characters
	 *@throws \TypeError if $newRestaurantViolationCompliance is not a string
	 **/
	public function setRestaurantViolationCompliance(?string $newRestaurantViolationCompliance) : void {
		// verify the restaurant violation compliance is secure
		$newRestaurantViolationCompliance = trim($newRestaurantViolationCompliance);
		$newRestaurantViolationCompliance = filter_var($newRestaurantViolationCompliance, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
//		if(empty($newRestaurantViolationCompliance) === true) {
//			throw(new \InvalidArgumentException("restaurant violation compliance is empty or insecure"));
//		}
		// verify the restaurant violation compliance will fit in the database
		if(strlen($newRestaurantViolationCompliance) > 17) {
			throw(new \RangeException("restaurant violation compliance too large"));
		}
		//store the restaurant violation compliance
		$this->restaurantViolationCompliance = $newRestaurantViolationCompliance;
	}
/**
 * accessor method for restaurant violation date
 *
 * @return \DateTime value of restaurant violation date
 **/
	public function getRestaurantViolationDate() : \DateTime {
		return($this->restaurantViolationDate);
	}
	/**
	 * mutator method for restaurant violation date
	 *
	 * @param \DateTime|string|null $newRestaurantViolationDate
	 * restaurant violation date as a DateTime object or string (or null to load the current time)
	 *
	 * @throws \InvalidArgumentException if $newRestaurantViolationDate is not a valid object or string
	 * @throws \RangeException if $newRestaurantViolationDate is a date that does not exist
	 **/
	/**
	 * @param \DateTime $restaurantViolationDate
	 */
	public function setRestaurantViolationDate($newRestaurantViolationDate = null) : void {
		//base case: if the date is null, use the current date and time
		if($newRestaurantViolationDate === null) {
			$this->restaurantViolationDate = new \DateTime();
			return;
		}
		// store the like date using the ValidateDate trait
		try{
			$newRestaurantViolationDate = self::validateDate($newRestaurantViolationDate);
		} catch(\InvalidArgumentException | \RangeException $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
		$this->restaurantViolationDate = $newRestaurantViolationDate;
	}
/**
 *accessor method for restaurant violation memo
 *
 * @return string value of restaurant violation memo
 *
 **/
	public function getRestaurantViolationMemo() : ?string {
		return($this->restaurantViolationMemo);
	}
	/**
	 * mutator method for restaurant violation memo
	 *
	 * @param string $newRestaurantViolationMemo new value of restaurant violation memo
	 *@throws \InvalidArgumentException if $newRestaurantViolationMemo is not a string or insecure
	 *@throws \RangeException if $newRestaurantViolationMemo is > 255 characters
	 *@throws \TypeError if $newRestaurantViolationMemo is not a string
	 **/
	public function setRestaurantViolationMemo(string $newRestaurantViolationMemo) : void {
		// verify the restaurant violation memo is secure
		$newRestaurantViolationMemo = trim($newRestaurantViolationMemo);
		$newRestaurantViolationMemo = filter_var($newRestaurantViolationMemo, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
//		if(empty($newRestaurantViolationMemo) === true) {
//			throw(new \InvalidArgumentException("restaurant violation memo is empty or insecure"));
//		}
		// verify the restaurant violation memo will fit in the database
		if(strlen($newRestaurantViolationMemo) > 700) {
			throw(new \RangeException("restaurant violation memo is too large"));
		}
		//store the restaurant violation memo
		$this->restaurantViolationMemo = $newRestaurantViolationMemo;
	}
/**
 *
 * accessor method for restaurant violation results
 * @return string value of restaurant violation results
 **/
	public function getRestaurantViolationResults() :string {
		return($this->restaurantViolationResults);
	}
	/**
	 * mutator method for restaurant violation results
	 * @param string $newRestaurantViolationResults new value of results
	 * @throws \InvalidArgumentException if $newRestaurantViolationResults is not a string or insecure
	 * @throws \RangeException if $newRestaurantViolationResults is > 32 characters
	 * @throws \TypeError if $newRestaurantViolationMemo is not a string
	 **/
	public function setRestaurantViolationResults(string $newRestaurantViolationResults) : void {
		// verify the restaurant violation results are secure
		$newRestaurantViolationResults = trim($newRestaurantViolationResults);
		$newRestaurantViolationResults = filter_var($newRestaurantViolationResults, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newRestaurantViolationResults) === true) {
			throw(new \InvalidArgumentException("restaurant violation results is empty or insecure"));
		}
		// verify the restaurant violation results will fit in the database
		if(strlen($newRestaurantViolationResults) > 40) {
			throw(new \RangeException("restaurant violation results too large"));
		}
		// store the restaurant violation results
		$this->restaurantViolationResults = $newRestaurantViolationResults;
	}
	/**
	 * inserts this restaurant violation into mySQL
	 *
	 * @param \pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 **/
	public function insert(\PDO $pdo) : void {
		// enforce the restaurantViolationId is null (i.e., don't insert a restaurantViolationId that already exists)
		if($this->restaurantViolationId !== null) {
			throw(new \PDOException("not a new restaurant violation id"));
		}
		// create query template
		$query = "INSERT INTO restaurantViolation(restaurantViolationRestaurantId, restaurantViolationViolationId, restaurantViolationCompliance, restaurantViolationDate,restaurantViolationMemo, restaurantViolationResults) VALUES(:restaurantViolationRestaurantId, :restaurantViolationViolationId,:restaurantViolationCompliance, :restaurantViolationDate, :restaurantViolationMemo, :restaurantViolationResults)";
		$statement = $pdo->prepare($query);

		// bind the member variables in the place holder template
		$formattedDate = $this->restaurantViolationDate->format("Y-m-d");
		$parameters = ["restaurantViolationRestaurantId" => $this->restaurantViolationRestaurantId, "restaurantViolationViolationId" => $this->restaurantViolationViolationId, "restaurantViolationCompliance" => $this->restaurantViolationCompliance, "restaurantViolationDate" => $formattedDate, "restaurantViolationMemo" => $this->restaurantViolationMemo, "restaurantViolationResults" => $this->restaurantViolationResults];
		$statement->execute($parameters);
		// update the null restaurantViolationId with what mySQL just gave us
		$this->restaurantViolationId = intval($pdo->lastInsertId());
	}
/**
 * deletes this restaurantViolation from mySQL
 * @param \PDO $pdo PDO connection object
 * @throws \PDOException when mySQL related errors occur
 * @throws \TypeError if $pdo is not a PDO connection object
 **/
public function delete(\PDO $pdo) : void {
	// enforce the restaurantViolationId is not null (i.e., don't delete a restaurantViolation that hasn't been inserted)
	if($this->restaurantViolationId === null) {
		throw(new \PDOException("unable to delete a restaurant violation that does not exist"));
	}
	//create query template
	$query = "DELETE FROM restaurantViolation WHERE restaurantViolationId = :restaurantViolationId";
	$statement = $pdo->prepare($query);

	//bind the member variables to the place holder in the template
	$parameters = ["restaurantViolationId" => $this->restaurantViolationId];
	$statement->execute($parameters);
}
/**
 * updates this restaurantViolation in mySQL
 * @param \PDO $pdo PDO connection object
 * @throws \PDOException when mySQL related errors occur
 * @throws \TypeError if $pdo is not a PDO connection object
 **/
public function update(\PDO $pdo) : void {
	//enforce the restaurantViolationId is not null (i.e., don't update a violationId that has not been inserted)
	if($this->restaurantViolationId === null){
		throw(new \PDOException("unable to update a restaurantViolationId that does not exist"));
	}
	// create a query template
	$query = "UPDATE restaurantViolation SET restaurantViolationRestaurantId = :restaurantViolationRestaurantId, restaurantViolationViolationId = :restaurantViolationViolationId, restaurantViolationCompliance = :restaurantViolationCompliance ,restaurantViolationDate = :restaurantViolationDate, restaurantViolationMemo = :restaurantViolationMemo, restaurantViolationResults = :restaurantViolationResults WHERE restaurantViolationId = :restaurantViolationId";
	$statement = $pdo->prepare($query);

	// bind the member variables to the place holders in the template
	$formattedDate = $this->restaurantViolationDate->format("Y-m-d");
	$parameters = ["restaurantViolationId" => $this->restaurantViolationId, "restaurantViolationRestaurantId" => $this->restaurantViolationRestaurantId, "restaurantViolationViolationId" => $this->restaurantViolationViolationId, "restaurantViolationCompliance" => $this->restaurantViolationCompliance, "restaurantViolationDate" => $formattedDate, "restaurantViolationMemo" => $this->restaurantViolationMemo, "restaurantViolationResults" => $this->restaurantViolationResults];
	$statement->execute($parameters);
}
/**
 * gets the restaurantViolation by restaurantViolationId
 *
 * @param \PDO $pdo PDO connection object
 * @param  int $restaurantViolationId restaurant Violation Id to search for
 * @return restaurantViolation|null restaurantViolation found or null if not found
 * @throws \PDOException when mySQL related errors occur
 * @throws \TypeError when variables are not the correct data type
 **/
public static function getRestaurantViolationByRestaurantViolationId(\PDO $pdo, int $restaurantViolationId) : ?RestaurantViolation {
	// sanitize the restaurantViolationId before searching
	if($restaurantViolationId <= 0) {
		throw(new \PDOException("restaurant violation id is not positive"));
	}
	//create quary template
	$query = "SELECT restaurantViolationId, restaurantViolationRestaurantId, restaurantViolationViolationId, restaurantViolationCompliance, restaurantViolationDate, restaurantViolationMemo,restaurantViolationResults FROM restaurantViolation WHERE restaurantViolationId";
	$statement = $pdo->prepare($query);


	// bind the restaurant Violation id to the place holder in the template
	$parameters = ["restaurantViolationId" => $restaurantViolationId];
	$statement->execute($parameters);
	// grab the restaurantViolation from mySQL
	try {
		$restaurantViolation = null;
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		$row = $statement->fetch();
		if($row !== false) {
			$restaurantViolation = new RestaurantViolation($row["restaurantViolationId"], $row["restaurantViolationRestaurantId"], $row["restaurantViolationViolationId"], $row["restaurantViolationCompliance"],$row["restaurantViolationDate"], $row["restaurantViolationMemo"],$row["restaurantViolationResults"]);
		}
	} catch(\Exception $exception) {
		// if the row couldn't be converted rethrow it
		throw(new \PDOException($exception->getMessage(), 0, $exception));
	}
	return($restaurantViolation);
}
/**
 * gets restaurantViolation by restaurantViolationRestaurantId
 *
 * @param \PDO $pdo PDO connection object
 * @param int $restaurantViolationRestaurantId restaurant id to search by
 * @return \SplFixedArray SplFixedArray of restaurantViolation found
 * @throws \PDOException when mySQL related errors occur
 * @throws \TypeError when variables are not the correct data type
 *
 **/
public static function  getRestaurantViolationByRestaurantViolationRestaurantId(\PDO $pdo, int $restaurantViolationRestaurantId) : \SPLFixedArray {
	// sanitize the restaurant id before searching
	if($restaurantViolationRestaurantId <= 0 ) {
		throw(new \RangeException("restaurant violation restaurant id"));
	}

	$restaurantViolationRestaurantId = str_replace("_", "\\_", str_replace("%", "\\%", $restaurantViolationRestaurantId));


	// create query template
	$query = "SELECT restaurantViolationId, restaurantViolationRestaurantId, restaurantViolationViolationId, restaurantViolationCompliance, restaurantViolationDate, restaurantViolationMemo, restaurantViolationResults FROM restaurantViolation WHERE restaurantViolationRestaurantId = :restaurantViolationRestaurantId";
	$statement = $pdo->prepare($query);
	//bind the restaurant Violation Restaurant Id to the place holder in the template
	$parameters = ["restaurantViolationRestaurantId" => $restaurantViolationRestaurantId];
	$statement->execute($parameters);
	// build an array of restaurant violations
	$restaurantViolations = new \SplFixedArray($statement->rowCount());
	$statement->setFetchMode(\PDO::FETCH_ASSOC);
	while(($row = $statement->fetch()) !== false){
		try{

			$restaurantViolation = new RestaurantViolation($row["restaurantViolationId"], $row["restaurantViolationRestaurantId"], $row["restaurantViolationViolationId"], $row["restaurantViolationCompliance"], $row["restaurantViolationDate"], $row["restaurantViolationMemo"],$row["restaurantViolationResults"]);
			$restaurantViolations [$restaurantViolations->key()] = $restaurantViolation;
			$restaurantViolations->next();
		} catch(\Exception $exception) {
			// if the row couldn't be converted, rethrow it
			throw(new \PDOException($exception->getMessage(), 0, $exception));
		}
	}
	return($restaurantViolations);
}
	/**
	 * gets restaurantViolation by restaurantViolationViolationId
	 *
	 * @param \PDO $pdo PDO connection object
	 * @param int $restaurantViolationViolationId violation id to search by
	 * @return \SplFixedArray SplFixedArray of Violation found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when variables are not the correct data type
	 *
	 **/
	public static function  getRestaurantViolationByRestaurantViolationViolationId(\PDO $pdo, int $restaurantViolationViolationId) : \SPLFixedArray {
		// sanitize the restaurant id before searching
		if($restaurantViolationViolationId <= 0 ) {
			throw(new \RangeException("restaurant violation violation id"));
		}
		// create query template
		$query = "SELECT restaurantViolationId, restaurantViolationRestaurantId, restaurantViolationViolationId, restaurantViolationCompliance, restaurantViolationDate, restaurantViolationMemo, restaurantViolationResults FROM restaurantViolation WHERE restaurantViolationRestaurantId";
		$statement = $pdo->prepare($query);
		//bind the restaurant Violation violation Id to the place holder in the template
		$parameters = ["restaurantViolationViolationId" => $restaurantViolationViolationId];
		$statement->execute($parameters);
		// build an array of restaurant violations
		$restaurantViolations = new \SplFixedArray($statement->rowCount());
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		while(($row = $statement->fetch()) !== false){
			try{
				$restaurantViolation = new restaurantViolation($row["restaurantViolationId"], $row["restaurantViolationRestaurantId"], $row["restaurantViolationViolationId"], $row["restaurantViolationCompliance"], $row["restaurantViolationDate"], $row["restaurantViolationMemo"],$row["restaurantViolationResults"]);
				$restaurantViolations [$restaurantViolations->key()] = $restaurantViolation;
				$restaurantViolations->next();
			} catch(\Exception $exception) {
				// if the row couldn't be converted, rethrow it
				throw(new \PDOException($exception->getMessage(), 0, $exception));
			}
		}
		return($restaurantViolations);
	}
	/**
	 * gets the restaurant Violation date
	 *
	 * @param  \PDO $pdo PDO connection object
	 * @param \DateTime $sunriseRestaurantViolationDate beginning date to search for
	 * @param \DateTime $sunsetRestaurantViolationDate ending date to search for
	 * @return \SplFixedArray of restaurantViolations found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when variables are not the correct data type
	 * @throws \InvalidArgumentException if either sun dates are in the wrong format
	 *
	 **/
	public static function getRestaurantViolationByRestaurantViolationDate (\PDO $pdo, \DateTime $sunriseRestaurantViolationDate, \DateTime $sunsetRestaurantViolationDate ) : \SplFixedArray {
		//enforce both dates are present
		if((empty($sunriseRestaurantViolationDate) === true) || (empty($sunsetRestaurantViolationDate) === true)) {
			throw(new \InvalidArgumentException("dates are empty of insecure"));
		}
		// ensure both dates are in the correct format and are secure
		try {
			$sunriseRestaurantViolationDate = self::validateDateTime($sunriseRestaurantViolationDate);
			$sunsetRestaurantViolationDate = self::validateDateTime($sunsetRestaurantViolationDate);
		} catch(\InvalidArgumentException | \RangeException $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
		// create query template
		$query = "SELECT restaurantViolationId, restaurantViolationRestaurantId, restaurantViolationViolationId, restaurantViolationCompliance, restaurantViolationDate, restaurantViolationMemo, restaurantViolationResults FROM restaurantViolation WHERE restaurantViolationDate >= :sunriseRestaurantViolationDate and restaurantViolationDate <= :sunsetRestaurantViolation";
		$statement = $pdo->prepare($query);
		//format the dates so that mySQL can use them
		$formattedSunriseDate = $sunriseRestaurantViolationDate->format("Y-m-d");
		$formattedSunsetDate = $sunsetRestaurantViolationDate->format("Y-m-d");

		$parameters = ["sunriseRestaurantViolationDate"=>$formattedSunriseDate, "sunsetRestaurantViolation"=>$formattedSunsetDate];
		$statement->execute($parameters);
		//build an array of restaurantViolations
		$restaurantViolations = new \SplFixedArray($statement->rowCount());
		$statement->setFetchMode(\PDO::FETCH_ASSOC);

		while(($row = $statement->fetch()) !== false){
			try{
				$restaurantViolation = new RestaurantViolation($row["restaurantViolationId"], $row["restaurantViolationRestaurantId"], $row["restaurantViolationViolationId"], $row["restaurantViolationCompliance"], $row["restaurantViolationDate"], $row["restaurantViolationMemo"],$row["restaurantViolationResults"]);
				$restaurantViolations[$restaurantViolations->key()] = $restaurantViolation;
				$restaurantViolations->next();
			} catch(\Exception $exception) {
				throw (new \PDOException($exception->getMessage(),0, $exception));
			}
		}
		return($restaurantViolations);
	}
/**
 * get restaurantViolation by restaurant violation memo
 * @param \PDO $pdo PDO connection object
 * @param string $restaurantViolationMemo restaurant violation memo to search for
 * @return \SplFixedArray SplFixedArray of restaurant violation found
 * @throws \PDOException when mySQL related errors occur
 * @throws \TypeError when variables are not the correct data type
 **/
public static function getRestaurantViolationByRestaurantViolationMemo(\PDO $pdo, string $restaurantViolationMemo) : \SplFixedArray {
	// sanitize the description before searching
	$restaurantViolationMemo = trim($restaurantViolationMemo);
	$restaurantViolationMemo = filter_var($restaurantViolationMemo, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	if(empty($restaurantViolationMemo) === true) {
		throw(new \PDOException("restaurant violation memo is invalid"));
	}
	// escape any mySQL wild cards
	$restaurantViolationMemo = str_replace("_", "\\_", str_replace("%", "\\%", $restaurantViolationMemo));

	//create query template
	$query = "SELECT restaurantViolationId, restaurantViolationRestaurantId,restaurantViolationViolationId, restaurantViolationCompliance, restaurantViolationDate, restaurantViolationMemo, restaurantViolationResults FROM restaurantViolation WHERE restaurantViolationMemo LIKE :restaurantViolationMemo";
	$statement = $pdo->prepare($query);

	//bind the restaurant violation memo to the place holder in the template
	$restaurantViolationMemo = "%$restaurantViolationMemo";
	$parameters = ["restaurantViolationMemo" => $restaurantViolationMemo];
	$statement->execute($parameters);
	//build an array of restaurant violation memo
	$restaurantViolations = new \SplFixedArray($statement->rowCount());
	$statement->setFetchMode(\PDO::FETCH_ASSOC);
	while(($row = $statement->fetch()) !== false) {
		try {
			$restaurantViolation = new RestaurantViolation($row["restaurantViolationId"], $row["restaurantViolationRestaurantId"], $row["restaurantViolationViolationId"], $row["restaurantViolationCompliance"], $row["restaurantViolationDate"], $row["restaurantViolationMemo"],$row["restaurantViolationResults"]);
			$restaurantViolations[$restaurantViolations->key()] = $restaurantViolation;
			$restaurantViolations->next();
		} catch(\Exception $exception) {
			// if the row couldn't be converted, rethrow it
			throw(new \PDOException($exception->getMessage(), 0, $exception));
		}
	}
	return($restaurantViolations);
}
	/**
	 * get restaurantViolation by restaurant violation results
	 * @param \PDO $pdo PDO connection object
	 * @param string $restaurantViolationResults restaurant violation results to search for
	 * @return \SplFixedArray SplFixedArray of restaurant violation found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when variables are not the correct data type
	 **/
	public static function getRestaurantViolationByRestaurantViolationResults(\PDO $pdo, string $restaurantViolationResults) : \SplFixedArray {
		// sanitize the description before searching
		$restaurantViolationResults = trim($restaurantViolationResults);
		$restaurantViolationResults = filter_var($restaurantViolationResults, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($restaurantViolationResults) === true) {
			throw(new \PDOException("restaurant violation results is invalid"));
		}
		// escape any mySQL wild cards
		$restaurantViolationResults = str_replace("_", "\\_", str_replace("%", "\\%", $restaurantViolationResults));

		//create query template
		$query = "SELECT restaurantViolationId, restaurantViolationRestaurantId, restaurantViolationViolationId, restaurantViolationCompliance, restaurantViolationDate,restaurantViolationMemo, restaurantViolationResults FROM restaurantViolation WHERE restaurantViolationResults LIKE :restaurantViolationResults";
		$statement = $pdo->prepare($query);

		//bind the restaurant violation results to the place holder in the template
		$restaurantViolationResults = "%$restaurantViolationResults";
		$parameters = ["restaurantViolationResults" => $restaurantViolationResults];
		$statement->execute($parameters);
		//build an array of restaurant violation results
		$restaurantViolations = new \SplFixedArray($statement->rowCount());
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		while(($row = $statement->fetch()) !== false) {
			try {
				$restaurantViolation = new RestaurantViolation($row["restaurantViolationId"], $row["restaurantViolationRestaurantId"], $row["restaurantViolationViolationId"], $row["restaurantViolationCompliance"], $row["restaurantViolationDate"], $row["restaurantViolationMemo"],$row["restaurantViolationResults"]);
				$restaurantViolations[$restaurantViolations->key()] = $restaurantViolation;
				$restaurantViolations->next();
			} catch(\Exception $exception) {
				// if the row couldn't be converted, rethrow it
				throw(new \PDOException($exception->getMessage(), 0, $exception));
			}
		}
		return($restaurantViolations);
	}

	/**
	 * formats the state variables for JSON serialization
	 * @return array resulting state variables to serialize
	 **/
	public function jsonSerialize() {
		$fields = get_object_vars($this);
		//format the date so that the front end can consume it
		$fields["restaurantViolationDate"] = round(floatval($this->restaurantViolationDate->format("U.u")) * 1000);
		return($fields);
	}
} /**this is the class end bracket**/

