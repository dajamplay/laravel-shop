@extends(request()->is('admin/*') ? 'layouts.error-admin' : 'layouts.error-public')
