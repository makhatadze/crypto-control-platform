<?php
/**
 *  app/Http/Middleware/LoggedIn.php
 *
 * Date-Time: 18.05.21
 * Time: 12:57
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Http\Middleware;

use Closure, View, Route;
use Illuminate\Http\Request;

class LoggedIn
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     *
     * @return string|null
     */
    public function handle(Request $request, Closure $next): ?string
    {
        if (!is_null(request()->user())) {
            return redirect('admin/');
        }

        return $next($request);
    }
}
