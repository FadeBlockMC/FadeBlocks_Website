<div class="container">
    <h1>Player Report</h1>

    <form method="POST" action="{{ route('report.store') }}">
        @csrf
        <div class="mb-3">
            <label>Username of the rule breaker:</label>
            <input type="text" name="rule_breaker_username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Rules broken:</label>
            <input type="text" name="rules_broken" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Your username:</label>
            <input type="text" name="your_username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Evidence (Screenshot/YouTube link):</label>
            <input type="text" name="evidence" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Timestamp of the video:</label>
            <input type="text" name="timestamp" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Additional Information:</label>
            <textarea name="additional_info" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
