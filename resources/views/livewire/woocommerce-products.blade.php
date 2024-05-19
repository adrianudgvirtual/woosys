<div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 w-full">
                        <thead>
                        <tr>
                            <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                SKU
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Brand
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Stock
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Last Update
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($products as $product)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $product->id }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $product->sku }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $product->brand }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $product->stock }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $product->price }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $product->updated_at }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
