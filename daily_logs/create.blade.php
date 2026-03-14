<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('今日の記録を付ける') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('daily_logs.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700">日付</label>
                        <input type="date" name="log_date" class="w-full rounded border-gray-300" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">吃音の強さ (1-5)</label>
                        <input type="number" name="stutter_level" min="1" max="5" class="w-full rounded border-gray-300"
                            required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">メモ</label>
                        <textarea name="memo" class="w-full rounded border-gray-300"></textarea>
                    </div>
                    <x-primary-button>保存する</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>