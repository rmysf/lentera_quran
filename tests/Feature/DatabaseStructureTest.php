<?php

namespace Tests\Feature;

use App\Models\Ayah;
use App\Models\Bookmark;
use App\Models\Doa;
use App\Models\DoaCategory;
use App\Models\Surah;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DatabaseStructureTest extends TestCase
{
    use RefreshDatabase;

    public function test_arabic_text_with_harakat_is_stored_and_retrieved_identically(): void
    {
        $surah = Surah::factory()->create(['id' => 1]);
        $arabicText = 'بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ ۝ الْحَمْدُ لِلَّهِ رَبِّ الْعَالَمِينَ';

        $ayah = Ayah::factory()->create([
            'surah_id' => $surah->id,
            'nomor_ayat' => 1,
            'teks_arab' => $arabicText,
        ]);

        $freshAyah = Ayah::findOrFail($ayah->id);

        $this->assertSame($arabicText, $freshAyah->teks_arab);
    }

    public function test_surah_ayahs_and_polymorphic_bookmarks_relations_with_morph_map(): void
    {
        $user = User::factory()->create();
        $surah = Surah::factory()->create(['id' => 1]);

        $ayahTwo = Ayah::factory()->create([
            'surah_id' => $surah->id,
            'nomor_ayat' => 2,
        ]);
        $ayahOne = Ayah::factory()->create([
            'surah_id' => $surah->id,
            'nomor_ayat' => 1,
        ]);

        $category = DoaCategory::factory()->create();
        $doa = Doa::factory()->create(['doa_category_id' => $category->id]);

        $this->assertCount(2, $surah->ayahs);
        $this->assertSame([$ayahOne->id, $ayahTwo->id], $surah->ayahs->pluck('id')->all());

        $surahBookmark = $user->bookmarks()->create([
            'bookmarkable_type' => 'surah',
            'bookmarkable_id' => $surah->id,
        ]);
        $ayahBookmark = $user->bookmarks()->create([
            'bookmarkable_type' => 'ayah',
            'bookmarkable_id' => $ayahOne->id,
        ]);
        $doaBookmark = $user->bookmarks()->create([
            'bookmarkable_type' => 'doa',
            'bookmarkable_id' => $doa->id,
        ]);

        $this->assertCount(3, $user->bookmarks);
        $this->assertInstanceOf(Surah::class, $surahBookmark->bookmarkable);
        $this->assertTrue($surahBookmark->bookmarkable->is($surah));
        $this->assertInstanceOf(Ayah::class, $ayahBookmark->bookmarkable);
        $this->assertTrue($ayahBookmark->bookmarkable->is($ayahOne));
        $this->assertInstanceOf(Doa::class, $doaBookmark->bookmarkable);
        $this->assertTrue($doaBookmark->bookmarkable->is($doa));
    }

    public function test_duplicate_bookmark_for_same_user_and_item_is_rejected(): void
    {
        $user = User::factory()->create();
        $surah = Surah::factory()->create(['id' => 1]);

        Bookmark::create([
            'user_id' => $user->id,
            'bookmarkable_type' => 'surah',
            'bookmarkable_id' => $surah->id,
        ]);

        $this->expectException(QueryException::class);

        Bookmark::create([
            'user_id' => $user->id,
            'bookmarkable_type' => 'surah',
            'bookmarkable_id' => $surah->id,
        ]);
    }
}

