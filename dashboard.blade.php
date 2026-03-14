<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('吃音記録一覧') }}
            </h2>
            <a href="{{ route('daily_logs.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-sm">
                新しい記録を付ける
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if(session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <table class="w-full text-left">
                    <thead>
                        <tr>
                            <th class="p-2 border-b">日付</th>
                            <th class="p-2 border-b">強さ</th>
                            <th class="p-2 border-b">メモ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($logs as $log)
                            <tr>
                                <td class="p-2 border-b">{{ $log->log_date }}</td>
                                <td class="p-2 border-b">{{ $log->stutter_level }}</td>
                                <td class="p-2 border-b">{{ $log->memo }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>