# Class declaration
class DPR:
    def __init__(self, id, nama, bidang, partai):
        self.id = id
        self.nama = nama
        self.bidang = bidang
        self.partai = partai

# GETTER AND SETTER
    def get_id(self):
        return self.id

    def set_id(self, id):
        self.id = id

    def get_nama(self):
        return self.nama

    def set_nama(self, nama):
        self.nama = nama

    def get_bidang(self):
        return self.bidang

    def set_bidang(self, bidang):
        self.bidang = bidang

    def get_partai(self):
        return self.partai

    def set_partai(self, partai):
        self.partai = partai

def tambah_anggota(anggota_dpr_list):
    id = input("Masukkan ID anggota: ")
    nama = input("Masukkan nama anggota: ")
    bidang = input("Masukkan bidang anggota: ")
    partai = input("Masukkan partai anggota: ")

    anggota_dpr_list.append(DPR(id, nama, bidang, partai))
    print("Anggota DPR berhasil ditambahkan.")

def ubah_anggota(anggota_dpr_list):
    id = input("Masukkan ID anggota yang ingin diubah: ")

    ditemukan = False
    for anggota in anggota_dpr_list:
        if anggota.get_id() == id:
            ditemukan = True
            nama = input("Masukkan nama anggota: ")
            bidang = input("Masukkan bidang anggota: ")
            partai = input("Masukkan partai anggota: ")

            anggota.set_nama(nama)
            anggota.set_bidang(bidang)
            anggota.set_partai(partai)
            print("Anggota DPR berhasil diubah.")
            break

    if not ditemukan:
        print("ID anggota tidak ditemukan.")

def hapus_anggota(anggota_dpr_list):
    id = input("Masukkan ID anggota yang ingin dihapus: ")

    anggota_dpr_list[:] = [anggota for anggota in anggota_dpr_list if anggota.get_id() != id]
    print("Anggota DPR berhasil dihapus.")

def tampilkan_daftar_anggota(anggota_dpr_list):
    print("Daftar Anggota DPR:")
    for anggota in anggota_dpr_list:
        print(anggota.get_id(), ". Nama:", anggota.get_nama(), ", Bidang:", anggota.get_bidang(), ", Partai:", anggota.get_partai())