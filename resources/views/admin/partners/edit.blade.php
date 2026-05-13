@extends('layouts.admin')

@section('page_title', 'Edit Partner')
@section('page_subtitle', 'Perbarui informasi partner yang sudah terdaftar.')

@section('content')

<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden max-w-2xl">
    <div class="px-8 py-6 bg-slate-50/50 border-b">
        <h2 class="text-lg font-black text-slate-800">Form Edit Partner</h2>
    </div>
    <div class="px-8 py-6">
        <form action="{{ route('admin.partners.update', $partner->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-bold text-slate-600 mb-2">Nama Partner</label>
                    <input type="text" name="name" value="{{ $partner->name }}"
                        class="w-full px-5 py-3 rounded-xl border border-slate-200 bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition"
                        required>
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-600 mb-2">URL Logo</label>
                    <input type="text" name="logo_url" value="{{ $partner->logo_url }}"
                        class="w-full px-5 py-3 rounded-xl border border-slate-200 bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition"
                        required>
                    <div class="mt-3">
                        <p class="text-xs text-slate-400 mb-1">Preview logo saat ini:</p>
                        <img src="{{ $partner->logo_url }}" class="w-20 h-20 rounded-xl object-cover border">
                    </div>
                </div>
            </div>
            <div class="flex gap-3 mt-6">
                <button type="submit"
                    class="px-6 py-3 bg-indigo-600 text-white rounded-xl font-bold hover:bg-indigo-700 transition">
                    Simpan Perubahan
                </button>
                <a href="{{ route('admin.partners.index') }}"
                    class="px-6 py-3 bg-slate-100 text-slate-600 rounded-xl font-bold hover:bg-slate-200 transition">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>

@endsection