<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($offences->count() > 0)
                        <h2 class="text-2xl font-bold mb-4">My Offences</h2>
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Offence Type</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Car Reg Number</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Place Of Offence</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Time Of Offence</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($offences as $offence)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $offence->OffenceCommited }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $offence->DriverCarRegNo }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $offence->PlaceOfOffence }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $offence->created_at }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">
                                            <a href="#" class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-3 bg-green-200 rounded hover:bg-blue-200">Pay Now</a>
                                            <a href="#" class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-3 bg-red-200 rounded hover:bg-blue-200">Appeal</a>
                                        </td>
                                        
                                        
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No offenses found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
