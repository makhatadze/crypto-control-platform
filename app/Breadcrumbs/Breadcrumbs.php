<?php
/**
 *  app/Breadcrumbs/Breadcrumbs.php
 *
 * Date-Time: 20.05.21
 * Time: 11:35
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Breadcrumbs;

use Illuminate\Http\Request;

/**
 * Class Breadcrumbs
 * @package App\Breadcrumbs
 */
class Breadcrumbs
{

    /**
     * @var \Illuminate\Http\Request
     */
    private $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    /**
     * @return array
     */
    public function segments(): array
    {
        return collect($this->request->segments())->map(function ($segment) {
            return new Segment($this->request, $segment);
        })->toArray();
    }
}