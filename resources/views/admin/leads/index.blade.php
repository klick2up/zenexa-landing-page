@extends('admin.layout')

@section('title', 'Manage Inquiries & Leads | Klick2Up')

@section('admin_content')
<div class="space-y-8 animate-fade-in-up" id="leads-container">
    {{-- Header --}}
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-display font-bold text-primary">Inquiries & Leads</h2>
            <p class="text-xs text-gray-400 mt-1">Manage and respond to client inquiries submitted via the website contact form</p>
        </div>
    </div>

    {{-- Leads Table --}}
    <div class="bg-white rounded-3xl border border-gray-200/80 shadow-sm overflow-hidden">
        @if($leads->count() > 0)
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs font-medium border-collapse">
                <thead>
                    <tr class="bg-gray-50 text-gray-400 uppercase tracking-wider border-b border-gray-150">
                        <th class="px-6 py-4">Name</th>
                        <th class="px-6 py-4">Email</th>
                        <th class="px-6 py-4">Service</th>
                        <th class="px-6 py-4">Message Preview</th>
                        <th class="px-6 py-4">Received Date</th>
                        <th class="px-6 py-4 text-center">Status</th>
                        <th class="px-6 py-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($leads as $lead)
                    <tr class="hover:bg-gray-50/20 transition-colors {{ !$lead->is_read ? 'bg-accent/[0.01] border-l-2 border-l-accent' : '' }}">
                        <td class="px-6 py-4 font-bold text-primary">{{ $lead->first_name }} {{ $lead->last_name }}</td>
                        <td class="px-6 py-4 text-gray-500">{{ $lead->email }}</td>
                        <td class="px-6 py-4">
                            <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-gray-100 text-gray-600">
                                {{ $lead->service ?: 'General Inquiry' }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-gray-500 max-w-xs truncate">{{ $lead->message }}</td>
                        <td class="px-6 py-4 text-gray-400">{{ $lead->created_at->format('M d, Y H:i') }}</td>
                        <td class="px-6 py-4 text-center">
                            @if($lead->is_read)
                            <span class="px-2.5 py-0.5 rounded-full text-[9px] font-bold bg-emerald-50 text-emerald-600 uppercase">Read</span>
                            @else
                            <span class="px-2.5 py-0.5 rounded-full text-[9px] font-bold bg-red-50 text-accent uppercase animate-pulse">New</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center gap-2">
                                {{-- View full message button --}}
                                <button onclick="openLeadModal({{ json_encode($lead) }})" class="p-2 rounded-lg bg-gray-50 hover:bg-gray-100 text-gray-500 hover:text-primary transition-colors" title="Read Full Message">
                                    <i data-lucide="eye" class="w-4 h-4"></i>
                                </button>
                                
                                {{-- Toggle read status button --}}
                                <form action="{{ route('admin.leads.read', $lead->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="p-2 rounded-lg bg-gray-50 hover:bg-gray-100 text-gray-500 hover:text-accent transition-colors" title="{{ $lead->is_read ? 'Mark as Unread' : 'Mark as Read' }}">
                                        <i data-lucide="{{ $lead->is_read ? 'mail' : 'mail-open' }}" class="w-4 h-4"></i>
                                    </button>
                                </form>

                                {{-- Delete button --}}
                                <form action="{{ route('admin.leads.destroy', $lead->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this lead? This action is irreversible.');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 rounded-lg bg-red-50 hover:bg-red-100 text-red-500 hover:text-red-700 transition-colors" title="Delete Inquiry">
                                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        {{-- Pagination --}}
        <div class="px-6 py-4 border-t border-gray-100 bg-gray-50/50">
            {{ $leads->links() }}
        </div>
        @else
        <div class="p-20 text-center text-gray-400 space-y-4">
            <div class="w-16 h-16 rounded-full bg-gray-50 flex items-center justify-center mx-auto text-gray-400 border border-gray-100 shadow-inner">
                <i data-lucide="inbox" class="w-8 h-8"></i>
            </div>
            <div class="space-y-1">
                <p class="text-base font-bold text-primary">No Inquiries Found</p>
                <p class="text-xs text-gray-400">Leads submitted via the website contact form will appear here.</p>
            </div>
        </div>
        @endif
    </div>
</div>

{{-- Message Detail Modal --}}
<div id="lead-modal" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-300">
    <div class="bg-white rounded-3xl border border-gray-200 max-w-lg w-full p-8 space-y-6 shadow-2xl transform scale-95 transition-transform duration-300">
        {{-- Modal Header --}}
        <div class="flex justify-between items-start">
            <div class="space-y-1">
                <h3 id="modal-name" class="text-xl font-display font-bold text-primary">Name</h3>
                <p id="modal-email" class="text-xs text-gray-400">email@example.com</p>
            </div>
            <button onclick="closeLeadModal()" class="text-gray-400 hover:text-gray-600 p-1.5 rounded-lg hover:bg-gray-50 transition-all"><i data-lucide="x" class="w-5 h-5"></i></button>
        </div>

        {{-- Details --}}
        <div class="grid grid-cols-2 gap-4 bg-gray-50 p-4 rounded-2xl text-xs font-semibold text-gray-600 border border-gray-100">
            <div>
                <span class="block text-[10px] text-gray-400 font-bold uppercase tracking-wider">Service Requested</span>
                <span id="modal-service" class="text-sm font-bold text-primary block mt-0.5">Service Name</span>
            </div>
            <div>
                <span class="block text-[10px] text-gray-400 font-bold uppercase tracking-wider">Received Date</span>
                <span id="modal-date" class="text-sm font-bold text-primary block mt-0.5">Date String</span>
            </div>
        </div>

        {{-- Message Body --}}
        <div class="space-y-2">
            <span class="block text-[10px] text-gray-400 font-bold uppercase tracking-wider">Message Description</span>
            <div id="modal-message" class="text-sm font-light text-gray-600 bg-gray-50/50 border border-gray-100/50 p-4 rounded-2xl max-h-60 overflow-y-auto whitespace-pre-wrap leading-relaxed">
                Message Content
            </div>
        </div>

        {{-- Footer actions --}}
        <div class="flex justify-end pt-2">
            <button onclick="closeLeadModal()" class="bg-primary hover:bg-accent text-white px-6 py-2.5 rounded-full font-bold text-xs transition duration-300">
                Close Detail
            </button>
        </div>
    </div>
</div>

<script>
    const modal = document.getElementById('lead-modal');
    const modalContent = modal.querySelector('.transform');
    
    function openLeadModal(lead) {
        document.getElementById('modal-name').innerText = lead.first_name + ' ' + (lead.last_name || '');
        document.getElementById('modal-email').innerText = lead.email;
        document.getElementById('modal-service').innerText = lead.service || 'General Inquiry';
        document.getElementById('modal-message').innerText = lead.message;
        
        // Format Date
        const date = new Date(lead.created_at);
        document.getElementById('modal-date').innerText = date.toLocaleDateString('en-US', {
            month: 'short', day: 'numeric', year: 'numeric', hour: '2-digit', minute: '2-digit'
        });

        // Show Modal
        modal.classList.remove('hidden');
        setTimeout(() => {
            modal.classList.remove('opacity-0');
            modalContent.classList.remove('scale-95');
            modalContent.classList.add('scale-100');
        }, 50);
    }

    function closeLeadModal() {
        modal.classList.add('opacity-0');
        modalContent.classList.remove('scale-100');
        modalContent.classList.add('scale-95');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    }
</script>
@endsection
