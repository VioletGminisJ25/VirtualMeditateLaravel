<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl  text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Glasses') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900 dark:text-gray-100">{{ __('Glasses') }}</h1>
                            <p class="mt-2 text-sm text-gray-900 dark:text-gray-400">A list of all the {{ __('Glasses') }}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('glasses.create') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add new</a>
                        </div>
                    </div>

                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="inline-block min-w-full py-2 align-middle">
                                <table class="w-full divide-y divide-gray-100">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-900 dark:text-gray-400">No</th>

									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-900 dark:text-gray-400">Name</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-900 dark:text-gray-400">Quality</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-900 dark:text-gray-400">Experience</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-900 dark:text-gray-400">Tiers</th>

                                        <th scope="col" class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-900 dark:text-gray-400"></th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y bg-white dark:bg-gray-800">
                                    @foreach ($glasses as $glass)
                                        <tr class="bg-white dark:bg-gray-800">
                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 dark:text-gray-100">{{ ++$i }}</td>

										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 dark:text-gray-100">{{ $glass->name }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 dark:text-gray-100">{{ $glass->quality }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 dark:text-gray-100">{{ $glass->experience }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 dark:text-gray-100">{{ $glass->tier->name }}</td>

                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 dark:text-gray-100">
                                                <form action="{{ route('glasses.destroy', $glass->id) }}" method="POST">
                                                    <a href="{{ route('glasses.show', $glass->id) }}" class="text-gray-400 font-bold hover:text-gray-100 mr-2">{{ __('Show') }}</a>
                                                    <a href="{{ route('glasses.edit', $glass->id) }}" class="text-indigo-600 font-bold hover:text-indigo-500  mr-2">{{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('glasses.destroy', $glass->id) }}" class="text-red-600 font-bold hover:text-red-500" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">{{ __('Delete') }}</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <div class="mt-4 px-4">
                                    {!! $glasses->withQueryString()->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
