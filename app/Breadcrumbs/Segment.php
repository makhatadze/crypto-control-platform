<?php
/**
 *  app/Breadcrumbs/Segment.php
 *
 * Date-Time: 20.05.21
 * Time: 11:21
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Breadcrumbs;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

/**
 * Class Segment
 * @package App\Breadcrumbs
 */
class Segment
{
    /**
     * @var \Illuminate\Http\Request
     */
    protected $request;

    /**
     * @var string
     */
    protected $segment;


    public function __construct(Request $request, string $segment)
    {
        $this->request = $request;
        $this->segment = $segment;
    }

    /**
     *  If admin home page, return dashboard
     * @return string
     */
    public function name(): string
    {
        return $this->segment === 'admin' ? 'dashboard' : $this->segment;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function model(): Collection
    {
         return collect($this->request->route()->parameters())->where('slug',$this->segment);
    }

    public function url()
    {
        return url(implode('/',array_slice($this->request->segments(), 0, $this->position() + 1)));
    }

    /**
     * @return false|int|string
     */
    public function position()
    {
        return array_search($this->segment, $this->request->segments(), true);
    }
}