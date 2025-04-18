<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: salto/nebula/installation/v1/installation.proto

namespace Saltoapis\Nebula\Installation\V1\Installation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The digital key art configuration object associated to the installation
 *
 * Generated from protobuf message <code>salto.nebula.installation.v1.Installation.DigitalKeyArt</code>
 */
class DigitalKeyArt extends \Google\Protobuf\Internal\Message
{
    /**
     * The file resource name for the digital key background image. It must
     * have the format of
     * `installations/surelock-homes-hq/files/01DSYSJ1PR36VVC3MRFRV4DC7G`.
     *
     * Generated from protobuf field <code>optional string background_image = 1;</code>
     */
    protected $background_image = null;
    /**
     * The URI to view the digital key background image.
     *
     * Generated from protobuf field <code>string background_image_uri = 2;</code>
     */
    protected $background_image_uri = '';
    /**
     * The color used to display the installation name text on top of the background image.
     *
     * Generated from protobuf field <code>optional .salto.type.Color text_color = 3;</code>
     */
    protected $text_color = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $background_image
     *           The file resource name for the digital key background image. It must
     *           have the format of
     *           `installations/surelock-homes-hq/files/01DSYSJ1PR36VVC3MRFRV4DC7G`.
     *     @type string $background_image_uri
     *           The URI to view the digital key background image.
     *     @type \Saltoapis\Type\Color $text_color
     *           The color used to display the installation name text on top of the background image.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Saltoapis\Nebula\Installation\V1\Installation::initOnce();
        parent::__construct($data);
    }

    /**
     * The file resource name for the digital key background image. It must
     * have the format of
     * `installations/surelock-homes-hq/files/01DSYSJ1PR36VVC3MRFRV4DC7G`.
     *
     * Generated from protobuf field <code>optional string background_image = 1;</code>
     * @return string
     */
    public function getBackgroundImage()
    {
        return isset($this->background_image) ? $this->background_image : '';
    }

    public function hasBackgroundImage()
    {
        return isset($this->background_image);
    }

    public function clearBackgroundImage()
    {
        unset($this->background_image);
    }

    /**
     * The file resource name for the digital key background image. It must
     * have the format of
     * `installations/surelock-homes-hq/files/01DSYSJ1PR36VVC3MRFRV4DC7G`.
     *
     * Generated from protobuf field <code>optional string background_image = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBackgroundImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->background_image = $var;

        return $this;
    }

    /**
     * The URI to view the digital key background image.
     *
     * Generated from protobuf field <code>string background_image_uri = 2;</code>
     * @return string
     */
    public function getBackgroundImageUri()
    {
        return $this->background_image_uri;
    }

    /**
     * The URI to view the digital key background image.
     *
     * Generated from protobuf field <code>string background_image_uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBackgroundImageUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->background_image_uri = $var;

        return $this;
    }

    /**
     * The color used to display the installation name text on top of the background image.
     *
     * Generated from protobuf field <code>optional .salto.type.Color text_color = 3;</code>
     * @return \Saltoapis\Type\Color|null
     */
    public function getTextColor()
    {
        return $this->text_color;
    }

    public function hasTextColor()
    {
        return isset($this->text_color);
    }

    public function clearTextColor()
    {
        unset($this->text_color);
    }

    /**
     * The color used to display the installation name text on top of the background image.
     *
     * Generated from protobuf field <code>optional .salto.type.Color text_color = 3;</code>
     * @param \Saltoapis\Type\Color $var
     * @return $this
     */
    public function setTextColor($var)
    {
        GPBUtil::checkMessage($var, \Saltoapis\Type\Color::class);
        $this->text_color = $var;

        return $this;
    }

}

