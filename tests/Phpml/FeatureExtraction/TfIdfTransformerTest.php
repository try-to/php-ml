<?php

declare (strict_types = 1);

namespace tests\Phpml\FeatureExtraction;

use Phpml\FeatureExtraction\TfIdfTransformer;

class TfIdfTransformerTest extends \PHPUnit_Framework_TestCase
{
    public function testTfIdfTransformation()
    {
        //https://en.wikipedia.org/wiki/Tf%E2%80%93idf

        $samples = [
            [0 => 1, 1 => 1, 2 => 2, 3 => 1, 4 => 0, 5 => 0],
            [0 => 1, 1 => 1, 2 => 0, 3 => 0, 4 => 2, 5 => 3],
        ];

        $tfIdfSamples = [
            [0 => 0, 1 => 0, 2 => 0.602, 3 => 0.301, 4 => 0, 5 => 0],
            [0 => 0, 1 => 0, 2 => 0, 3 => 0, 4 => 0.602, 5 => 0.903],
        ];

        $transformer = new TfIdfTransformer();

        $this->assertEquals($tfIdfSamples, $transformer->transform($samples), '', 0.001);
    }
}
