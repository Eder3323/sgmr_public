<div>
    @section('section-title-header')
            {{ __($title) }}
    @endsection

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-28">
                <div class="p-6 text-gray-900">

                    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        <x-menu.card>
                            <div class="flex-1 truncate">
                                <div class="flex items-center space-x-2">
                                    <x-menu.title_card :title="'Predial'"></x-menu.title_card>
                                </div>
                                <x-menu.span_card :title="'Pagos predial'"></x-menu.span_card>
                                <x-menu.p_card :title="'Mineral de la Reforma'"></x-menu.p_card>
                            </div>
                            <div class="h-10 w-10 flex-shrink-0 rounded-full bg-gray-200 flex items-center justify-center">
                                <x-icons.home class="size-6 text-gray-40"></x-icons.home>
                            </div>
                            {{-- Detalles --}}
                            <x-slot name="details">
                                <x-menu.submenu-card title="Catalogos">
                                    <x-menu.submenu_child :title="'Catalogo Predial'" :route="'prueba'"></x-menu.submenu_child>
                                </x-menu.submenu-card>
                                <x-menu.submenu-card title="Pagos y cancelaciones">
                                    <x-menu.submenu_child :title="'Pagos'" :route="'predial.pagos'"></x-menu.submenu_child>
                                    <x-menu.submenu_child :title="'Cancelaciones'" :route="'predial.cancelaciones'"></x-menu.submenu_child>
                                </x-menu.submenu-card>
                                <x-menu.submenu-card title="Configuraciones" :route="'chatgpt'">
                                </x-menu.submenu-card>
                            </x-slot>
                        </x-menu.card>

                        <x-menu.card>
                            <div class="flex-1 truncate">
                                <div class="flex items-center space-x-2">
                                    <x-menu.title_card :title="'Reglamentos'"></x-menu.title_card>
                                </div>
                                <x-menu.span_card :title="'Sistema Financiero'"></x-menu.span_card>
                                <x-menu.p_card :title="'Mineral de la Reforma'"></x-menu.p_card>
                            </div>
                            <div class="h-10 w-10 flex-shrink-0 rounded-full bg-gray-200 flex items-center justify-center">
                                <x-icons.money class="size-6 text-gray-40"></x-icons.money>
                            </div>
                            {{-- Detalles --}}
                            <x-slot name="details">
                                <x-menu.submenu-card title="Reglamentos Y Espectaculos" :route="'reglamentos.principal'">
                                </x-menu.submenu-card>
                                <x-menu.submenu-card title="Inspector">
                                    <x-menu.submenu_child :title="'Pre Registro Inspector'" :route="'reglamentos.inspector.registro'"></x-menu.submenu_child>
                                    <x-menu.submenu_child :title="'Historial de Registro'" :route="'reglamentos.inspector.historial'"></x-menu.submenu_child>
                                </x-menu.submenu-card>
                            </x-slot>
                        </x-menu.card>

                        <x-menu.card>
                            <div class="flex-1 truncate">
                                <div class="flex items-center space-x-2">
                                    <x-menu.title_card :title="'Administrativo'"></x-menu.title_card>
                                </div>
                                <x-menu.span_card :title="'Administration'"></x-menu.span_card>
                                <x-menu.p_card :title="'Mineral de la Reforma'"></x-menu.p_card>
                            </div>
                            <div class="h-10 w-10 flex-shrink-0 rounded-full bg-gray-200 flex items-center justify-center">
                                <x-icons.building class="size-6 text-gray-40"></x-icons.building>
                            </div>
                            {{-- Detalles --}}
                            <x-slot name="details">
                                <x-menu.submenu-card title="Catalogos">
                                    <x-menu.submenu_child :title="'Catalogo de Prueba'" :route="'prueba'"></x-menu.submenu_child>
                                </x-menu.submenu-card>
                                <x-menu.submenu-card title="Pagos y cancelaciones">
                                    <x-menu.submenu_child :title="'Pagos'" :route="'prueba2'"></x-menu.submenu_child>
                                    <x-menu.submenu_child :title="'Cancelaciones'" :route="'prueba3'"></x-menu.submenu_child>
                                </x-menu.submenu-card>
                                <x-menu.submenu-card title="Configuraciones" :route="'chatgpt'">
                                </x-menu.submenu-card>
                            </x-slot>
                        </x-menu.card>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
