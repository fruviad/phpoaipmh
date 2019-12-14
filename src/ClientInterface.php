<?php

/**
 * PHPOAIPMH Library
 *
 * @license http://opensource.org/licenses/MIT
 * @link https://github.com/caseyamcl/phpoaipmh
 * @Version 4.0
 * @package caseyamcl/phpoaipmh
 * @author Casey McLaughlin <caseyamcl@gmail.com>
 *
 * For the full copyright and license information, -please view the LICENSE.md
 * file that was distributed with this source code.
 *
 * ------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Phpoaipmh;

use Phpoaipmh\HttpAdapter\HttpAdapterInterface;

/**
 * OAI-PMH Client class retrieves and decodes OAI-PMH from a given URL
 *
 * @since v2.6
 * @author Casey McLaughlin <caseyamcl@gmail.com>
 */
interface ClientInterface
{
    /**
     * Perform a request and return a OAI SimpleXML Document
     *
     * @param  string $verb Which OAI-PMH verb to use
     * @param  array $params An array of key/value parameters
     * @return \SimpleXMLElement An XML document
     */
    public function request($verb, array $params = array());

    /**
     * @return HttpAdapterInterface
     */
    public function getHttpAdapter();
}
