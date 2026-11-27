<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DashboardAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->session()->get('dashboard_authenticated')) {
            return redirect()->route('dashboard.login');
        }

        $lastActivity = $request->session()->get(
            'dashboard_last_activity'
        );

        // 1 heure d'inactivité
        if (!$lastActivity || (time() - $lastActivity) >= 3600) {
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()
                ->route('dashboard.login')
                ->with('message', 'Session expirée. Veuillez vous reconnecter.');
        }

        // Actualiser l'activité à chaque requête
        $request->session()->put(
            'dashboard_last_activity',
            time()
        );

        return $next($request);
    }
}
