<x-filament-panels::page>
    <div class="flex flex-col gap-6">

        <div>
            <p>
                O estabelecimento está
                @if (App\Models\Info::first()->store_open)
                    <span>Aberto</span>
                @else
                    <span>Fechado</span>
                @endif
            </p>
        </div>

        <!-- Table Info -->
        <div class="flex flex-col w-full gap-6 lg:flex-row">
            <div
                class="w-full p-6 space-y-2 bg-white border border-gray-200 rounded-lg dark:border-gray-700 dark:bg-gray-900 lg:w-1/2">
                <p class="text-gray-600 dark:text-white">Categorias</p>
                <p class="text-3xl font-bold text-black dark:text-white">{{ App\Models\Category::all()->count() }}</p>

                <p class="mt-2 text-sm text-right text-gray-500 underline dark:text-gray-400">
                    <a href="/admin/products">
                        Todos as categorias
                    </a>
                </p>
            </div>

            <div
                class="w-full p-6 space-y-2 bg-white border border-gray-200 rounded-lg dark:border-gray-700 dark:bg-gray-900 lg:w-1/2">
                <p class="text-gray-600 dark:text-white">Pratos/Produtos</p>
                <p class="text-3xl font-bold text-black dark:text-white">{{ App\Models\Product::all()->count() }}</p>

                <p class="mt-2 text-sm text-right text-gray-500 underline dark:text-gray-400">
                    <a href="/admin/products">
                        Todos os pratos/produtos
                    </a>
                </p>
            </div>

            <div
                class="w-full p-6 space-y-2 bg-white border border-gray-200 rounded-lg dark:border-gray-700 dark:bg-gray-900 lg:w-1/2">
                <p class="text-gray-600 dark:text-white">Itens de Combos</p>
                <p class="text-3xl font-bold text-black dark:text-white">{{ App\Models\ComboItem::all()->count() }}</p>

                <p class="mt-2 text-sm text-right text-gray-500 underline dark:text-gray-400">
                    <a href="/admin/combo-items">
                        Todos os itens de combos
                    </a>
                </p>
            </div>
        </div>

        <!-- Sale Products -->
        <div>
            <div
                class="w-full p-6 space-y-2 bg-white border border-gray-200 rounded-lg dark:border-gray-700 dark:bg-gray-900">
                <p class="text-gray-600 dark:text-white">Produtos em destaque</p>

                <div class="flex flex-col gap-6 lg:flex-row">
                    @foreach (App\Models\Product::where('on_sale', true)->get() as $product)
                        <div>
                            <img src="{{ $product->link_image }}" class="object-cover h-20 rounded-lg" alt="">
                            <p class="mt-2 dark:text-white">{{ $product->name }}</p>
                            <p class="dark:text-white">R${{ $product->price }}</p>

                            <p class="mt-2 text-sm text-right text-gray-500 underline dark:text-gray-400">
                                <a href="/admin/products/{{ $product->id }}">
                                    Detalhes
                                </a>
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-filament-panels::page>
