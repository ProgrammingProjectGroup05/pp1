<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/texttospeech/v1/cloud_tts.proto

namespace Google\Cloud\TextToSpeech\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The top-level message sent by the client for the `SynthesizeSpeech` method.
 *
 * Generated from protobuf message <code>google.cloud.texttospeech.v1.SynthesizeSpeechRequest</code>
 */
class SynthesizeSpeechRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Synthesizer requires either plain text or SSML as input.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.SynthesisInput input = 1;</code>
     */
    private $input = null;
    /**
     * Required. The desired voice of the synthesized audio.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.VoiceSelectionParams voice = 2;</code>
     */
    private $voice = null;
    /**
     * Required. The configuration of the synthesized audio.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.AudioConfig audio_config = 3;</code>
     */
    private $audio_config = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Texttospeech\V1\CloudTts::initOnce();
        parent::__construct();
    }

    /**
     * Required. The Synthesizer requires either plain text or SSML as input.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.SynthesisInput input = 1;</code>
     * @return \Google\Cloud\TextToSpeech\V1\SynthesisInput
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Required. The Synthesizer requires either plain text or SSML as input.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.SynthesisInput input = 1;</code>
     * @param \Google\Cloud\TextToSpeech\V1\SynthesisInput $var
     * @return $this
     */
    public function setInput($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\TextToSpeech\V1\SynthesisInput::class);
        $this->input = $var;

        return $this;
    }

    /**
     * Required. The desired voice of the synthesized audio.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.VoiceSelectionParams voice = 2;</code>
     * @return \Google\Cloud\TextToSpeech\V1\VoiceSelectionParams
     */
    public function getVoice()
    {
        return $this->voice;
    }

    /**
     * Required. The desired voice of the synthesized audio.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.VoiceSelectionParams voice = 2;</code>
     * @param \Google\Cloud\TextToSpeech\V1\VoiceSelectionParams $var
     * @return $this
     */
    public function setVoice($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\TextToSpeech\V1\VoiceSelectionParams::class);
        $this->voice = $var;

        return $this;
    }

    /**
     * Required. The configuration of the synthesized audio.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.AudioConfig audio_config = 3;</code>
     * @return \Google\Cloud\TextToSpeech\V1\AudioConfig
     */
    public function getAudioConfig()
    {
        return $this->audio_config;
    }

    /**
     * Required. The configuration of the synthesized audio.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.AudioConfig audio_config = 3;</code>
     * @param \Google\Cloud\TextToSpeech\V1\AudioConfig $var
     * @return $this
     */
    public function setAudioConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\TextToSpeech\V1\AudioConfig::class);
        $this->audio_config = $var;

        return $this;
    }

}

