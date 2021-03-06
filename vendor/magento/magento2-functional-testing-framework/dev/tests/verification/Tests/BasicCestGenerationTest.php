<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace tests\verification\Tests;

use tests\util\MftfTestCase;

class BasicCestGenerationTest extends MftfTestCase
{
    /**
     * Tests flat generation of a hardcoded test file with no external references.
     *
     * @throws \Exception
     * @throws \Magento\FunctionalTestingFramework\Exceptions\TestReferenceException
     */
    public function testBasicGeneration()
    {
        $this->generateAndCompareTest('BasicFunctionalTest');
    }

    /**
     * Tests flat generation of a hardcoded test file with no external references and with XML comments in:
     * - root `tests` element
     * - test body
     * - test before and after blocks
     * - annotations block
     *
     * @throws \Exception
     * @throws \Magento\FunctionalTestingFramework\Exceptions\TestReferenceException
     */
    public function testWithXmlComments()
    {
        $this->generateAndCompareTest('XmlCommentedTest');
    }
}
