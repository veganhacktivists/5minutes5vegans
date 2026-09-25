import { defineConfig, devices } from '@playwright/test'

// CI serves the app itself. Locally, point BASE_URL at a running copy.
const baseURL = process.env.BASE_URL || 'http://127.0.0.1:8123'

export default defineConfig({
    testDir: 'tests/browser',
    forbidOnly: !!process.env.CI,
    reporter: process.env.CI ? [['github'], ['html', { open: 'never' }]] : 'list',
    use: {
        baseURL,
        trace: 'retain-on-failure',
        // Lets a local run use a Chromium that's already installed
        launchOptions: process.env.CHROMIUM_PATH ? { executablePath: process.env.CHROMIUM_PATH } : {},
    },
    projects: [
        { name: 'desktop', use: { ...devices['Desktop Chrome'], viewport: { width: 1280, height: 800 } } },
        { name: 'phone', use: { ...devices['Pixel 7'] } },
    ],
    webServer: process.env.BASE_URL ? undefined : {
        command: 'php artisan serve --host=127.0.0.1 --port=8123',
        url: `${baseURL}/en`,
        env: { PHP_CLI_SERVER_WORKERS: '4' },
        reuseExistingServer: !process.env.CI,
    },
})
