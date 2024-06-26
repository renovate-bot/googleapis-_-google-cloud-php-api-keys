<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/apikeys/v2/resources.proto

namespace Google\Cloud\ApiKeys\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The representation of a key managed by the API Keys API.
 *
 * Generated from protobuf message <code>google.api.apikeys.v2.Key</code>
 */
class Key extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the key.
     * The `name` has the form:
     * `projects/<PROJECT_NUMBER>/locations/global/keys/<KEY_ID>`.
     * For example:
     * `projects/123456867718/locations/global/keys/b7ff1f9f-8275-410a-94dd-3855ee9b5dd2`
     * NOTE: Key is a global resource; hence the only supported value for
     * location is `global`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. Unique id in UUID4 format.
     *
     * Generated from protobuf field <code>string uid = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * Human-readable display name of this key that you can modify.
     * The maximum length is 63 characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';
    /**
     * Output only. An encrypted and signed value held by this key.
     * This field can be accessed only through the `GetKeyString` method.
     *
     * Generated from protobuf field <code>string key_string = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $key_string = '';
    /**
     * Output only. A timestamp identifying the time this key was originally
     * created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. A timestamp identifying the time this key was last
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Output only. A timestamp when this key was deleted. If the resource is not
     * deleted, this must be empty.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $delete_time = null;
    /**
     * Annotations is an unstructured key-value map stored with a policy that
     * may be set by external tools to store and retrieve arbitrary metadata.
     * They are not queryable and should be preserved when modifying objects.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 8;</code>
     */
    private $annotations;
    /**
     * Key restrictions.
     *
     * Generated from protobuf field <code>.google.api.apikeys.v2.Restrictions restrictions = 9;</code>
     */
    protected $restrictions = null;
    /**
     * Output only. A checksum computed by the server based on the current value
     * of the Key resource. This may be sent on update and delete requests to
     * ensure the client has an up-to-date value before proceeding. See
     * https://google.aip.dev/154.
     *
     * Generated from protobuf field <code>string etag = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $etag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the key.
     *           The `name` has the form:
     *           `projects/<PROJECT_NUMBER>/locations/global/keys/<KEY_ID>`.
     *           For example:
     *           `projects/123456867718/locations/global/keys/b7ff1f9f-8275-410a-94dd-3855ee9b5dd2`
     *           NOTE: Key is a global resource; hence the only supported value for
     *           location is `global`.
     *     @type string $uid
     *           Output only. Unique id in UUID4 format.
     *     @type string $display_name
     *           Human-readable display name of this key that you can modify.
     *           The maximum length is 63 characters.
     *     @type string $key_string
     *           Output only. An encrypted and signed value held by this key.
     *           This field can be accessed only through the `GetKeyString` method.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. A timestamp identifying the time this key was originally
     *           created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. A timestamp identifying the time this key was last
     *           updated.
     *     @type \Google\Protobuf\Timestamp $delete_time
     *           Output only. A timestamp when this key was deleted. If the resource is not
     *           deleted, this must be empty.
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *           Annotations is an unstructured key-value map stored with a policy that
     *           may be set by external tools to store and retrieve arbitrary metadata.
     *           They are not queryable and should be preserved when modifying objects.
     *     @type \Google\Cloud\ApiKeys\V2\Restrictions $restrictions
     *           Key restrictions.
     *     @type string $etag
     *           Output only. A checksum computed by the server based on the current value
     *           of the Key resource. This may be sent on update and delete requests to
     *           ensure the client has an up-to-date value before proceeding. See
     *           https://google.aip.dev/154.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Apikeys\V2\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the key.
     * The `name` has the form:
     * `projects/<PROJECT_NUMBER>/locations/global/keys/<KEY_ID>`.
     * For example:
     * `projects/123456867718/locations/global/keys/b7ff1f9f-8275-410a-94dd-3855ee9b5dd2`
     * NOTE: Key is a global resource; hence the only supported value for
     * location is `global`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the key.
     * The `name` has the form:
     * `projects/<PROJECT_NUMBER>/locations/global/keys/<KEY_ID>`.
     * For example:
     * `projects/123456867718/locations/global/keys/b7ff1f9f-8275-410a-94dd-3855ee9b5dd2`
     * NOTE: Key is a global resource; hence the only supported value for
     * location is `global`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. Unique id in UUID4 format.
     *
     * Generated from protobuf field <code>string uid = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. Unique id in UUID4 format.
     *
     * Generated from protobuf field <code>string uid = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Human-readable display name of this key that you can modify.
     * The maximum length is 63 characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Human-readable display name of this key that you can modify.
     * The maximum length is 63 characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. An encrypted and signed value held by this key.
     * This field can be accessed only through the `GetKeyString` method.
     *
     * Generated from protobuf field <code>string key_string = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getKeyString()
    {
        return $this->key_string;
    }

    /**
     * Output only. An encrypted and signed value held by this key.
     * This field can be accessed only through the `GetKeyString` method.
     *
     * Generated from protobuf field <code>string key_string = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setKeyString($var)
    {
        GPBUtil::checkString($var, True);
        $this->key_string = $var;

        return $this;
    }

    /**
     * Output only. A timestamp identifying the time this key was originally
     * created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. A timestamp identifying the time this key was originally
     * created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. A timestamp identifying the time this key was last
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. A timestamp identifying the time this key was last
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. A timestamp when this key was deleted. If the resource is not
     * deleted, this must be empty.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDeleteTime()
    {
        return $this->delete_time;
    }

    public function hasDeleteTime()
    {
        return isset($this->delete_time);
    }

    public function clearDeleteTime()
    {
        unset($this->delete_time);
    }

    /**
     * Output only. A timestamp when this key was deleted. If the resource is not
     * deleted, this must be empty.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDeleteTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->delete_time = $var;

        return $this;
    }

    /**
     * Annotations is an unstructured key-value map stored with a policy that
     * may be set by external tools to store and retrieve arbitrary metadata.
     * They are not queryable and should be preserved when modifying objects.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 8;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Annotations is an unstructured key-value map stored with a policy that
     * may be set by external tools to store and retrieve arbitrary metadata.
     * They are not queryable and should be preserved when modifying objects.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 8;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotations = $arr;

        return $this;
    }

    /**
     * Key restrictions.
     *
     * Generated from protobuf field <code>.google.api.apikeys.v2.Restrictions restrictions = 9;</code>
     * @return \Google\Cloud\ApiKeys\V2\Restrictions|null
     */
    public function getRestrictions()
    {
        return $this->restrictions;
    }

    public function hasRestrictions()
    {
        return isset($this->restrictions);
    }

    public function clearRestrictions()
    {
        unset($this->restrictions);
    }

    /**
     * Key restrictions.
     *
     * Generated from protobuf field <code>.google.api.apikeys.v2.Restrictions restrictions = 9;</code>
     * @param \Google\Cloud\ApiKeys\V2\Restrictions $var
     * @return $this
     */
    public function setRestrictions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApiKeys\V2\Restrictions::class);
        $this->restrictions = $var;

        return $this;
    }

    /**
     * Output only. A checksum computed by the server based on the current value
     * of the Key resource. This may be sent on update and delete requests to
     * ensure the client has an up-to-date value before proceeding. See
     * https://google.aip.dev/154.
     *
     * Generated from protobuf field <code>string etag = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Output only. A checksum computed by the server based on the current value
     * of the Key resource. This may be sent on update and delete requests to
     * ensure the client has an up-to-date value before proceeding. See
     * https://google.aip.dev/154.
     *
     * Generated from protobuf field <code>string etag = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

