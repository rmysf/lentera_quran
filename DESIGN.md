---
name: Lentera Quran
colors:
  surface: '#fdf9ee'
  surface-dim: '#dddacf'
  surface-bright: '#fdf9ee'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f7f3e8'
  surface-container: '#f1eee3'
  surface-container-high: '#ece8dd'
  surface-container-highest: '#e6e2d8'
  on-surface: '#1c1c15'
  on-surface-variant: '#43474e'
  inverse-surface: '#31312a'
  inverse-on-surface: '#f4f1e6'
  outline: '#74777f'
  outline-variant: '#c4c6cf'
  surface-tint: '#466084'
  primary: '#001833'
  on-primary: '#ffffff'
  primary-container: '#0f2d4f'
  on-primary-container: '#7b95bd'
  inverse-primary: '#aec8f2'
  secondary: '#0a6871'
  on-secondary: '#ffffff'
  secondary-container: '#a3eff9'
  on-secondary-container: '#186f77'
  tertiary: '#221600'
  on-tertiary: '#ffffff'
  tertiary-container: '#3c2900'
  on-tertiary-container: '#b98c30'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#d4e3ff'
  primary-fixed-dim: '#aec8f2'
  on-primary-fixed: '#001c3a'
  on-primary-fixed-variant: '#2d486b'
  secondary-fixed: '#a3eff9'
  secondary-fixed-dim: '#87d2dc'
  on-secondary-fixed: '#001f23'
  on-secondary-fixed-variant: '#004f56'
  tertiary-fixed: '#ffdea6'
  tertiary-fixed-dim: '#f1bf5d'
  on-tertiary-fixed: '#271900'
  on-tertiary-fixed-variant: '#5d4200'
  background: '#fdf9ee'
  on-background: '#1c1c15'
  surface-variant: '#e6e2d8'
typography:
  display-lg:
    fontFamily: Montserrat
    fontSize: 48px
    fontWeight: '700'
    lineHeight: 56px
    letterSpacing: -0.02em
  display-lg-mobile:
    fontFamily: Montserrat
    fontSize: 32px
    fontWeight: '700'
    lineHeight: 40px
    letterSpacing: -0.01em
  headline-lg:
    fontFamily: Montserrat
    fontSize: 32px
    fontWeight: '600'
    lineHeight: 40px
    letterSpacing: -0.01em
  headline-md:
    fontFamily: Montserrat
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
  headline-sm:
    fontFamily: Montserrat
    fontSize: 20px
    fontWeight: '600'
    lineHeight: 28px
  title-md:
    fontFamily: Montserrat
    fontSize: 16px
    fontWeight: '600'
    lineHeight: 24px
  body-lg:
    fontFamily: Montserrat
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 30px
  body-md:
    fontFamily: Montserrat
    fontSize: 15px
    fontWeight: '400'
    lineHeight: 24px
  body-sm:
    fontFamily: Montserrat
    fontSize: 13px
    fontWeight: '400'
    lineHeight: 20px
  label-md:
    fontFamily: Montserrat
    fontSize: 12px
    fontWeight: '600'
    lineHeight: 16px
    letterSpacing: 0.06em
  label-sm:
    fontFamily: Montserrat
    fontSize: 11px
    fontWeight: '500'
    lineHeight: 14px
    letterSpacing: 0.04em
  quran-arabic-lg:
    fontFamily: Amiri
    fontSize: 36px
    fontWeight: '400'
    lineHeight: 72px
  quran-arabic-md:
    fontFamily: Amiri
    fontSize: 28px
    fontWeight: '400'
    lineHeight: 58px
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  gutter: 1.5rem
  gutter-mobile: 1rem
  margin: 2rem
  margin-mobile: 1rem
  space-xs: 0.25rem
  space-sm: 0.5rem
  space-md: 1rem
  space-lg: 1.5rem
  space-xl: 2.5rem
---

## Brand & Style

This design system establishes a serene, contemplative, and refined digital sanctuary for Quranic reading, recitation, and study tailored to Indonesian Muslims. It balances classical sacred geometry and illuminated manuscript warmth with contemporary product design rigor.

### Aesthetic Tone & Philosophy
- **Spiritual & Serene:** Rooted in the visual rhythm of warm cream paper (`#FFFBF0`) reminiscent of aged parchment and mushaf leaves, paired with tranquil deep ocean navy (`#0F2D4F`).
- **Warm Illumination ("Lentera"):** Inspired by soft lantern glow through warm golden accents (`#D9A94A`) and delicate amber tints (`#FCE9A8`).
- **Design Movement:** Modern Sacred Minimalism. Crisp vector outlines, ample breathing space, unhurried typography, and micro-interactions that communicate focus and reverence rather than hyper-stimulating gamification.
- **Audience:** Indonesian readers seeking a distraction-free, respectful, and aesthetically elevated Quranic experience across desktop and mobile browsers.

## Colors

The palette is tuned around high contrast for long-form reading, paired with warm ambient tones to reduce eye strain during dawn (Fajr) or night (Isha) recitations.

### Palette Architecture
- **Primary Navy (`#0F2D4F`):** Anchors high-priority UI elements, core navigation headers, primary active cards, and authoritative display headings.
- **Secondary Teal (`#2A7B84`):** Represents tranquil contemplation. Used for secondary interaction cues, audio progress indicators, metadata tags, and surah categorization.
- **Accent Warm Gold (`#D9A94A` / Hover `#C4963A`):** Embodies the illuminating flame ("Lentera"). Reserved for key calls-to-action, bookmark indicators, active ayah highlights, and decorative illumination markers.
- **Soft Glow / Pale Gold (`#FCE9A8`):** Low-saturation background highlight used for active ayah playback tracking, hover halos, and gentle badge fills.
- **Base Canvas (`#FFFBF0`):** Warm cream surface ensuring reading clarity without the starkness of pure digital white.
- **Card Surface (`#FFFFFF`):** High-clarity elevated reading panels, framed by subtle organic sand borders (`#E8E2CF`).
- **Typography Tones:**
  - Body Text: `#1E2B3A` (slate-infused dark navy for optimal contrast).
  - Secondary/Muted: `#5B6B7A` (mid-tone steel blue for transliterations, translation notes, and verse numbers).

## Typography

The typography couples geometric structure for the Latin application chrome with calligraphic flow for the sacred text.

### Script Integration Rules
- **Latin Typography:** Handled by **Montserrat**. Headlines utilize medium-to-bold weights with slight negative letter tracking for modern editorial authority. Indonesian translation body text relies on regular weights with expansive line heights (`1.6x` to `1.7x`) to prevent reader fatigue.
- **Arabic Quranic Typography:** Rendered with classical Naskh metrics via **Amiri** (or Scheherazade New as fallback). Arabic lines must strictly enforce a minimum line height of `2.0x` to `2.2x` to avoid vertical collisions between complex diacritical marks (tashkeel, tanwin, tajweed signs).
- **Directional Isolation:** Ayah text must explicitly enforce `dir="rtl"` with explicit Arabic numeral formatting (`٠١٢٣٤٥٦٧٨٩`) for verse delimiters.

## Layout & Spacing

A disciplined 12-column grid provides responsive balance from compact mobile views to expansive wide-screen displays.

### Layout Rules & Breakpoints
- **Desktop (≥ 1024px):** 12-column fluid grid, max reading container width capped at `1200px` for general browse views, and `840px` for focused Mushaf reading modes to prevent eye wandering. Section margins set to `2rem` (`32px`), gutters set to `1.5rem` (`24px`).
- **Tablet (768px – 1023px):** 8-column layout with `1.5rem` gutters and margins. Side-by-side Surah index switches into a dual-column card format.
- **Mobile (< 768px):** 4-column layout with `1rem` margins and gutters. Verse rows transition into stacked vertical cards with touch targets sized to minimum `44px × 44px`.

## Elevation & Depth

This system avoids aggressive artificial drop shadows, relying instead on tonal layering, delicate tinted boundaries, and golden illumination.

### Depth Hierarchy
- **Level 0 (Canvas Base):** Warm Cream (`#FFFBF0`). Completely flat, grounding the reading interface.
- **Level 1 (Card & Content Blocks):** Pure White (`#FFFFFF`) with a 1px solid border in `#E8E2CF`. A micro-shadow provides organic separation: `0px 2px 8px rgba(15, 45, 79, 0.04)`.
- **Level 2 (Active Ayah / Interactive Hover):** Ayah cards gain a soft ambient amber halo: `0px 4px 20px rgba(217, 169, 74, 0.12)`, framed by a crisp border highlight in `#D9A94A`.
- **Level 3 (Fixed Overlays & Audio Bar):** Pure White floating surfaces with an elevated boundary shadow: `0px -4px 24px rgba(15, 45, 79, 0.08)` and top border `#E8E2CF`.

## Shapes

The geometric form language harmonizes approachable curvature with balanced structure.

### Radius Assignments
- **Cards & Reading Blocks:** Set strictly to `16px` (`1rem`) to present a soft, modern tile aesthetic without appearing childish.
- **Buttons & Chips:** Full pill geometry (`rounded-full` / `9999px`) to emphasize touch friendliness and distinguish interactive controls from content containers.
- **Inputs & Search Bars:** Pill-shaped (`9999px`) for quick search headers, or rounded (`12px` / `0.75rem`) within detailed settings panels.
- **Ayah Verse Badges:** 8-pointed star or circular badge encapsulating verse numbers.

## Components

### Buttons
- **Primary / Dark Button:** Solid Deep Navy (`#0F2D4F`) fill, crisp white text, full pill curvature (`rounded-full`). On hover: shifts to Deep Navy with an inset or subtle outer glow of Warm Gold (`#D9A94A`).
- **Accent / CTA Button:** Warm Gold (`#D9A94A`) fill with Deep Navy (`#0F2D4F`) text. On hover: shifts to `#C4963A`.
- **Ghost / Outlined Button:** Transparent background, 1.5px border in `#2A7B84` or `#0F2D4F`, matching text color.

### Chips & Badges
- **Category / Juz / Makkiyah / Madaniyah Chips:** Full pill radius (`9999px`), 6px vertical by 14px horizontal padding. Neutral state utilizes Pale Gold (`#FCE9A8`) fill with Deep Navy text, or Teal (`#2A7B84`) tint at 10% opacity with solid Teal text.

### Cards & Surah Tiles
- **Standard Card:** White (`#FFFFFF`) surface, 16px radius, 1px border `#E8E2CF`. Generous 20px–24px internal padding.
- **Active / Selected State Card:** Completely filled with Deep Navy (`#0F2D4F`). Text transitions to white (`#FFFFFF`), translation and secondary indicators shift to Pale Gold (`#FCE9A8`), and verse accents shine in Warm Gold (`#D9A94A`).

### Input Fields
- **Search & Filter Bars:** Pill shape (`9999px`), White (`#FFFFFF`) background, 1.5px border `#E8E2CF`. Focused state transitions border to Teal (`#2A7B84`) with a soft glow ring in `rgba(42, 123, 132, 0.15)`. Placeholder colored in `#5B6B7A`.

### Quran Specific: Persistent Audio Player Bar
- **Positioning:** Fixed to the viewport bottom (`bottom-0 left-0 right-0`), z-index 50.
- **Style:** Pure white surface with top border in `#E8E2CF` and ambient upward shadow.
- **Layout:** Flex row containing current reciter info and Surah/Ayah indicator on the left, primary playback controls (Play/Pause, Replay Ayah, Skip) in the center with a Warm Gold play button, and audio timeline slider in Teal (`#2A7B84`) across the top edge or centered bar.

### Layout: 4-Column Footer
- **Structure:** Desktop 4-column responsive grid transitioning into a stacked mobile layout.
- **Style:** Deep Navy (`#0F2D4F`) canvas, pale text `#FFFBF0`, muted links `#5B6B7A` with hover states illuminated in Warm Gold (`#D9A94A`). Contains: (1) Brand narrative & Indonesian license, (2) Quick Navigation (Surah index, Juz, Sajdah), (3) Features (Tafsir, Audio Qari, Tajweed Guide), (4) Settings & Accessibility preferences.