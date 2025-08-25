@extends('layout.layout')
@section('title', 'Teams')
@section('content')
    <section class="leadership-section">
        <div class="container">
            <div class="section-header center">
                <h2>Our Teams</h2>
                <p>Meet the experts guiding BuildMaster Construction</p>
            </div>

            <div class="leadership-grid">
                @foreach ($teams as $team)
                    <div class="leadership-card">
                        <!-- Team Image -->
                        <div class="leadership-image">
                            <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}">
                        </div>

                        <!-- Team Details -->
                        <div class="leadership-details">
                            <h3>{{ $team->name }}</h3>
                            <span class="leadership-position">{{ $team->service }}</span>

                            <div class="leadership-contact">
                                <a href="mailto:{{ $team->email }}">
                                    <i class="fas fa-envelope"></i> {{ $team->email }}
                                </a>
                            </div>

                            <p class="leadership-bio">
                                {{ $team->description }}
                            </p>

                            <div class="leadership-stats">
                                <a href="{{ route('contact', $team->id) }}" class="btn btn-outline">Contact Team</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
