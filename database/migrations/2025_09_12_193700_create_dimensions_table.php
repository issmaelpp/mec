<?php

use App\Enums\DimensionMeasureEnum;
use App\Enums\DimensionTypeEnum;
use App\Models\Classification;
use App\Models\Cycle;
use App\Models\Domain;
use App\Models\Subdomain;
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
        Schema::create('dimensions', function (Blueprint $table) {
            $table->id();
            $table->string('code', 15)->nullable();
            $table->text('note')->nullable();
            $table->string('label', 600);
            $table->enum('measure', DimensionMeasureEnum::getValues())->nullable();
            $table->enum('type', DimensionTypeEnum::getValues())->nullable();
            $table->foreignIdFor(Classification::class)->nullable();
            $table->foreignIdFor(Cycle::class)->nullable();
            $table->foreignIdFor(Domain::class)->nullable();
            $table->foreignIdFor(Subdomain::class)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dimensions');
    }
};
