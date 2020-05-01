@if (session('success'))
<div class="alert bg--primary">
  <div class="alert__body">
    <span style="color:green;">{{ session('success') }}</span>
  </div>
</div>
@endif

@if (session('error'))
<div class="alert bg--error">
  <div class="alert__body">
    <span>{{ session('error') }}</span>
  </div>
</div>
@endif