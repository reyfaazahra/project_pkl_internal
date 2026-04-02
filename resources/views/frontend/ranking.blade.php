@extends('layouts.frontend')

@section('content')
<div class="container py-4" style="max-width: 720px;">

    <h4 class="mb-4 fw-semibold">🏆 Ranking</h4>

    @forelse ($users as $index => $user)

        @php
            $isMe = auth()->id() == $user->id;
        @endphp

        <div class="mb-3 p-3 rounded-4 d-flex justify-content-between align-items-center"
             style="
                background: linear-gradient(135deg, #eef2ff, #f0f9ff);
                box-shadow: 0 4px 12px rgba(0,0,0,0.04);
                border: {{ $isMe ? '2px solid #6366f1' : '1px solid #e5e7eb' }};
                transition: 0.2s;
             ">

            {{-- LEFT --}}
            <div class="d-flex align-items-center gap-3">

                {{-- Rank --}}
                <div class="fw-bold" style="width: 35px;">
                    @if($index < 3)
                        <span style="font-size:18px;">
                            {{ ['🥇','🥈','🥉'][$index] }}
                        </span>
                    @else
                        <span class="text-muted">{{ $index + 1 }}</span>
                    @endif
                </div>

                {{-- USER --}}
                <div>
                    <div class="fw-semibold" style="color:#1e293b;">
                        {{ $user->name }}

                        @if($isMe)
                            <span style="
                                background:#6366f1;
                                color:white;
                                font-size:11px;
                                padding:2px 8px;
                                border-radius:999px;
                                margin-left:6px;
                            ">
                                Kamu
                            </span>
                        @endif
                    </div>

                    <div style="font-size:12px; color:#64748b;">
                        {{ $user->email }}
                    </div>
                </div>

            </div>

            {{-- SCORE --}}
            <div style="
                background: linear-gradient(135deg, #6366f1, #06b6d4);
                color:white;
                padding:6px 14px;
                border-radius:999px;
                font-weight:600;
                font-size:13px;
            ">
                🔥 {{ number_format($user->total_score ?? 0, 0) }}
            </div>

        </div>

    @empty
        <div class="text-center text-muted py-4">
            Belum ada data ranking
        </div>
    @endforelse

</div>
@endsection