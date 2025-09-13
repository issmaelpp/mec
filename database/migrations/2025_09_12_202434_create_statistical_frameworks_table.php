<?php

use App\Models\Dimension;
use App\Models\Organization;
use App\Models\Person;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('statistical_frameworks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Person::class)->nullable()->constrained();
            $table->foreignIdFor(Organization::class)->nullable()->constrained();
            $table->foreignIdFor(Dimension::class)->nullable()->constrained();
            $table->timestamps(6);
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistical_frameworks');
    }
};
