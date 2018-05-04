<?php
/**
 * HHVM Code Coverage Driver
 *
 * @copyright 2013 Anthon Pang
 *
 * @license BSD-3-Clause
 */

namespace LeanPHP\Behat\CodeCoverage\Common\Driver;

use SebastianBergmann\CodeCoverage\Driver\Driver as DriverInterface;
use SebastianBergmann\CodeCoverage\CodeCoverage;

/**
 * HHVM (Hip Hop VM) Driver
 *
 * {@internal Derived from SebastianBergmann\CodeCoverage\Driver\Xdebug.}
 *
 * @author Anthon Pang <apang@softwaredevelopment.ca>
 */
class HHVM implements DriverInterface
{
    /**
     * Constructor
     *
     * @throws SebastianBergmann\CodeCoverage\RuntimeException if PHP code coverage not enabled
     */
    public function __construct()
    {
        if (! defined('HPHP_VERSION')) {
            throw new \SebastianBergmann\CodeCoverage\RuntimeException('This driver requires HHVM');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function start(bool $determineUnusedAndDead = true): void
    {
        fb_enable_code_coverage();
    }

    /**
     * {@inheritdoc}
     */
    public function stop(): array
    {
        $codeCoverage = fb_get_code_coverage(true);

        if (null === $codeCoverage) {
            $codeCoverage = [];
        }

        fb_disable_code_coverage();

        return $codeCoverage;
    }
}
