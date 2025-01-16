<div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-200 rounded-lg">
        <thead>
            <tr class="text-center">
                <th class="px-4 py-2 border-b bg-gray-100 text-sm font-medium text-gray-700">
                    Title
                </th>
                <th class="px-4 py-2 border-b bg-gray-100 text-sm font-medium text-gray-700">
                    Content
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                <td class="px-4 py-2 border-b text-sm text-gray-700">
                    {{ $post->title }}
                </td>
                <td class="px-4 py-2 border-b text-sm text-gray-700">
                    {{ $post->content }}
                </td>
            </tr>
        </tbody>
    </table>
</div>
