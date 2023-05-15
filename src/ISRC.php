<?php

namespace Bmt\ISRC;

/**
 * Class ISRC
 * Represents an International Standard Recording Code (ISRC) and provides methods to manipulate it.
 */
class ISRC
{
    protected string $countryCode;
    protected string $registrantCode;
    protected string $year;
    protected string $designationCode;

    /**
     * ISRC constructor.
     *
     * @param string $countryCode The country code.
     * @param string $registrantCode The registrant code.
     * @param string $year The two-digit year.
     * @param string $designationCode The designation code.
     */
    public function __construct(
        string $countryCode,
        string $registrantCode,
        string $year,
        string $designationCode
    ) {
        $this->countryCode = $countryCode;
        $this->registrantCode = $registrantCode;
        $this->year = $year;
        $this->designationCode = $designationCode;
    }

    /**
     * Parses the provided ISRC code and sets the respective properties.
     *
     * @param string $isrcCode The ISRC code to parse.
     *
     * @return ISRC The current instance.
     *
     * @throws \Exception If the ISRC code has an invalid format.
     */
    public function parse(string $isrcCode): self
    {
        $pattern = '/^([A-Z]{2})([A-Z0-9]{3})(\d{2})(\d{5})$/';
        if (preg_match($pattern, $isrcCode, $matches)) {
            $this->countryCode = $matches[1];
            $this->registrantCode = $matches[2];
            $this->year = $matches[3];
            $this->designationCode = $matches[4];
        } else {
            throw new \Exception("Invalid ISRC code format.");
        }

        return $this;
    }

    /**
     * Retrieves the country code of the ISRC.
     *
     * @return string The country code.
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * Retrieves the registrant code of the ISRC.
     *
     * @return string The registrant code.
     */
    public function getRegistrantCode(): string
    {
        return $this->registrantCode;
    }

    /**
     * Retrieves the year of the ISRC.
     *
     * @return string The two-digit year.
     */
    public function getYear(): string
    {
        return $this->year;
    }

    /**
     * Retrieves the designation code of the ISRC.
     *
     * @return string The designation code.
     */
    public function getDesignationCode(): string
    {
        return $this->designationCode;
    }

    /**
     * Generates a complete ISRC code using the stored properties.
     *
     * @return string The generated ISRC code.
     */
    public function generateISRC(): string
    {
        $isrcCode = $this->countryCode . $this->registrantCode . $this->year . $this->designationCode;

        return strtoupper($isrcCode);
    }

    /**
     * Returns the ISRC code as a string.
     *
     * @return string The ISRC code.
     */
    public function __toString(): string
    {
        return $this->generateISRC();
    }
}
